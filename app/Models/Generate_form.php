<?php

namespace App\Models;

use CodeIgniter\Model;


class Generate_form extends Model
{
    protected $table = 'forman';
    
    public function generate_form_model($slug = FALSE)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('subserfun');
        $model = new Generate_form();
        
        if ($slug === FALSE)
        {
            return $this->findAll();
        }
        
        $builder->select('SubSerFunName');
        $builder->orWhereIn('SubSerFunFrontendName', $slug['Serviceline']);
        $query = $builder->get()->getResultArray();
        
        
        $query['FormID'] = $slug['FormID'];
        
        
        //append form ids to sessions
        $session = \Config\Services::session();
        $_SESSION['Tables'] = $query;
        
        //append key dict to sessions        
        $db      = \Config\Database::connect();
        $builder = $db->table('comp');
        
        $FormIDdict = [];
        
        foreach ($query['FormID'] as $key => $value):
            $CompanyID = explode("_", $key);
            $CompanyID = $CompanyID[2];
            
            $builder->select('Compname, CompID');
            $builder-> where('CompID',$CompanyID);
            $compname_forloop = $builder->get()->getResultArray();
            $compname = $compname_forloop[0]['Compname'];
            $FormIDdict[$key] = $compname;
        
        endforeach;
        
        $_SESSION['Tables']['FormIDdict'] = $FormIDdict;
        

        $frontendquery = $model->generate_form_model_getfields($query);
        
        
        
        return $frontendquery;
    }
    
    //Generate Form field Based on Table and Form ID passed from function above
    public function generate_form_model_getfields($slug = FALSE) 
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('forman');
        $builder->select('*');
        $builder->orWhereIn('FormID',$slug['FormID']);
        $formfields = $builder->get()->getResultArray();

        $account_numbers = [];
        $policy_numbers = [];
        
        
        
        // Returns Forman Array forms which need policy nos             
        foreach ($formfields as $key => $value):
                $formfields[$key] = array('tablename' => 'forman') + $value;
                if (strval($value['AcctNoIn']) == "1") {
                    array_push($account_numbers, $value['FormID']);
                }
                if (strval($value['PoNoIn']) == "1") {
                    array_push($policy_numbers, $value['FormID']);
                }

        endforeach;
             

        

        $i = 0;
        $z = 0;
        
        foreach ($slug as $x):
            foreach ($x as $key => $value):
                if(strval($key) == 'SubSerFunName') {
                    $builder = $db->table($value);
                    $builder->select('*');
                    $builder->orWhereIn('FormID',$slug['FormID']);
                    $formID_forloop = $builder->get()->getResultArray();            

                    foreach ($formID_forloop as $y):
                        $formID_forloop2 = []; 
                        $y['tablename'] = $value;
                        $y = array('tablename' => $y['tablename']) + $y;
                        $formID_forloop2[$i] = array_merge($formID_forloop2, $y);    
                        $formfields = array_merge($formfields, $formID_forloop2);
                        $i += 1;
                    endforeach;                   
                }
            endforeach;
        endforeach;   
        

        $formtoaccount = $formfields;
            
        
        foreach ($formtoaccount as $key => $value):       
            $key2 = $value["FormID"];
            $CompanyID = explode("_", $key2);
            $CompanyID = $CompanyID[2]+100;
            if (!array_key_exists($CompanyID, $formtoaccount)) {
                $formtoaccount[$CompanyID] = array();
            } 
            $formtoaccount[$CompanyID] = array_merge($formtoaccount[$CompanyID], $value);
            unset($formtoaccount[$key]);    
        endforeach; 
        
        foreach ($formtoaccount as $key => $value):
            $key2 = $key - 100;
            $formtoaccount[$key2] = $value; 
            unset($formtoaccount[$key]);
        endforeach; 

        $mandatoryformfields = [];
        $particularformfields = [];

        $i = 0;
        
        // Removes unneeded headers at top of array 

        foreach ($formfields as $key => $xyz):
            if ($xyz['tablename'] == 'forman') {
                $temp = [];
                    $comp = $key;
                $temp[$i] = array_slice($xyz, 6);
                $mandatoryformfields = array_merge($mandatoryformfields, $temp);
                $i += 1;
            } 
            
            else {
                $temp = [];
                $comp = $key;
                $temp[$i] = array_slice($xyz, 2);
                $particularformfields = array_merge($particularformfields, $temp);
                $i += 1;
            } 
                   
        endforeach;
  
        // To assign index of the formfield before making unique values       
        $i = 0;
        $y = 0;
        $z = 0;
        
        $parsedmandatoryformfields = [];
        
        foreach ($mandatoryformfields as $xyz):
            foreach ($xyz as $key => $value):
            
            // iterating over the database columns to find the data for mandatory area
            
            if ($i == 0 or $i % 3 == 0){
                if ($value == 1){
                    $y = 1; 
                    $parsedmandatoryformfields[$z][$key] = $value;               
                    
                    
                } 
            }
            
            
            if ($i == 1 or ($i -1) % 3 == 0){
                if ($y == 1){
                    $parsedmandatoryformfields[$z][$key] = $value;   

                }
                
            }
            
            if ($i == 2 or ($i -2) % 3 == 0){
                if ($y == 1){
                    $parsedmandatoryformfields[$z][$key] = $value;  
                    $y = 0;

                }
            }
            $i += 1;
            
            endforeach; 
            
        $z += 1;     
        
            
        endforeach;        
        
        
        $i = 0;
        $y = 0;       
        
        $parsedparticularformfields = [];

        
        foreach ($particularformfields as $xyz):
            foreach ($xyz as $key => $value):
            
            // iterating over the database columns to find the data for unique service line
            
            if ($i == 0 or $i % 3 == 0){
                if ($value == 1){
                    $y = 1;
                    $parsedparticularformfields[$z][$key] = $value;
                    
                }
            }
            
            if ($i == 1 or ($i -1) % 3 == 0){
                if ($y == 1){
                    $parsedparticularformfields[$z][$key] = $value;
                }
                
            }
            
            if ($i == 2 or ($i -2) % 3 == 0){
                if ($y == 1){
                    $parsedparticularformfields[$z][$key] = $value;
                    $y = 0;
                }
                
            }
            $i += 1;
            endforeach;
        $z += 1;
        
        endforeach;
        

        $x = count($slug['FormID']);
        $y = count($slug);
        $i = 0;
        
        //finding unique form fields
        $finalmandatoryformfields = [];
        foreach ($parsedmandatoryformfields as $y):
        foreach ($y as $key => $value):
            $temp = [];
            $findunique = array_unique(array_column($parsedmandatoryformfields, $key));
            $temp[$key] = $findunique;
            $finalmandatoryformfields = array_merge($finalmandatoryformfields, $temp);
        endforeach;
        endforeach;
        
        
        $finalparticularformfields = [];
        foreach ($parsedparticularformfields as $y):
        foreach ($y as $key => $value):
            $temp = [];
            $findunique = array_unique(array_column($parsedparticularformfields, $key));
            $temp[$key] = $findunique;
            $finalparticularformfields = array_merge($finalparticularformfields, $temp);
        endforeach;
        endforeach;
        

        $listofformfields = array_merge($finalmandatoryformfields,$finalparticularformfields);
        
        //find compID 
        
        $i = 0;
        


        
        //remove unneeded keys for formfield hover in frontend   
        
        foreach ($formtoaccount as $key => $x):
        
            $keylist = array_slice($x, 6);


            foreach ($keylist as $key2 => $value2):
                if (($i == 2 or ($i - 2) % 3 == 0) or ($i == 1 or ($i -1) % 3 == 0)) {
                    unset($keylist[$key2]);                    
                }
                if ($i == 0 or $i % 3 == 0){
                    if ($value2 != 1){
                    unset($keylist[$key2]);   
                }
                }

             $i += 1;
             
            endforeach; 
        $keylist = array_fill_keys(array_keys($keylist),$key);
        $formtoaccount[$key] = $keylist;
        endforeach; 
        
   
        $i = 0;
        $radio = 0;
        
        // changing textfields to radio and finding unique radio options 
        
       
        
        foreach ($listofformfields as $key => $value):
        
        
        if (($i == 2 or ($i -2) % 3 == 0) AND $radio == 1){
            
            $master = explode(', ', current(array_filter($value)));            
        }
        
        
        
        if (!empty($value)) {
        
        foreach ($value as $key2 => $value2):

            if (($i == 1 or ($i -1) % 3 == 0) AND $value2 == "RADIO BUTTONS"){
                
                 $radio = 1;
                 $listofformfields[$key] = array("RADIO BUTTONS");            
            }
                 
        //allow option of all id cards
            if (($i == 2 or ($i -2) % 3 == 0) AND $radio == 1){       
                if (!empty($value2)) {                   
                    $uniquemaster = array_intersect($master,explode(', ', $value2));  

                }
                //allow option of all id cards
                if ($key == "IDDocTyCho") {
                    $uniquemaster = array_unique(array_merge($master,explode(', ', $value2)));  
                }
            }
                             
        endforeach;
        
        if (($i == 2 or ($i -2) % 3 == 0) AND $radio == 1){

            $listofformfields[$key] = $uniquemaster;
            $radio = 0;
            
        }
       
        $i += 1;  
        }

        endforeach;
             
        

        

        //setting to frontend name 
        
        $db      = \Config\Database::connect();
        $builder = $db->table('dictionary');
        $builder->select('*');
        $namesoffields = $builder->get()->getResultArray();
        

        if($_SESSION['lang'] == 'en'){
        foreach ($listofformfields as $key => $value):
                $location = array_search($key,array_column($namesoffields,'db_name'));
                $remappedname = $namesoffields[$location]['frontend_name'];
                $listofformfields[$namesoffields[$location]['Grouping']][$namesoffields[$location]["Row Grouping"]][$remappedname] = $listofformfields[$key];
                $listofformfields[$namesoffields[$location]['Grouping']][$namesoffields[$location]["Row Grouping"]][$remappedname]["sentence_description"] = $namesoffields[$location]['Sentence Description'];
                $listofformfields[$namesoffields[$location]['Grouping']][$namesoffields[$location]["Row Grouping"]][$remappedname]["placeholder"] = $namesoffields[$location]['Placeholder'];
                
                unset($listofformfields[$key]);        
                
                
                
        endforeach;
        }
        
        if($_SESSION['lang'] == 'tc'){
            foreach ($listofformfields as $key => $value):
            $location = array_search($key,array_column($namesoffields,'db_name'));
            $remappedname = $namesoffields[$location]['Chi_frontend_name'];
            $listofformfields[$namesoffields[$location]['Grouping']][$namesoffields[$location]["Row Grouping"]][$remappedname] = $listofformfields[$key];
            $listofformfields[$namesoffields[$location]['Grouping']][$namesoffields[$location]["Row Grouping"]][$remappedname]["sentence_description"] = $namesoffields[$location]['Sentence Description'];
            $listofformfields[$namesoffields[$location]['Grouping']][$namesoffields[$location]["Row Grouping"]][$remappedname]["placeholder"] = $namesoffields[$location]['Placeholder'];
            
            unset($listofformfields[$key]);
            
            
            
            endforeach;
        }
        
        //echo "<pre>";
        //echo print_r($formtoaccount);
        //echo "</pre>";
        

        foreach ($formtoaccount as $key2 => $value2):
        foreach ($value2 as $key => $value):
        

        
                $location = array_search($key,array_column($namesoffields,'db_name'));
       
                $remappedname = $namesoffields[$location]['frontend_name'];
                $formtoaccount[$key2][$remappedname] = $formtoaccount[$key2][$key];
                
                

                
                
        unset($formtoaccount[$key2][$key]);
        
        endforeach;
        endforeach;
        
        //echo "<pre>";
        //echo print_r($formtoaccount);
        //echo "</pre>";
        
               
        
        $a = $formtoaccount[array_key_first($formtoaccount)];
        
        $isFirst = true;
        foreach ($formtoaccount as $x):
            if ($isFirst) {
                $isFirst = false;
                continue;
            }   
            $a = array_merge_recursive($a, $x);        
        endforeach;
               
        $formtoaccount = $a;

        
        
        $sortedlistofformfields = [];
        
        foreach ($listofformfields as $key => $value):

            ksort($value ,SORT_NUMERIC);  
      
            $sortedlistofformfields[$key] = $value;
            
        endforeach;

        
        $order = array('Basic Information', 'Address', 'Employment', 'Contact Number', 'Martial Status', 'Statement Setting', 'Payment Method', 'Beneficiary', 'Misc', 'Tax Status', 'Account Number');
        $offset = array_search("Account Number", $order);
        


        
        foreach ($sortedlistofformfields as $key => $value):
            
            $offset = array_search($key, $order);

            $sortedlistofformfields[$key]['order'] = $offset;
            
        endforeach;

            
        uasort($sortedlistofformfields, function ($a, $b) {
            return $a['order'] <=> $b['order'];
        });
        
        foreach ($sortedlistofformfields as $key => $value):
            
            unset($sortedlistofformfields[$key]['order']);
            
        endforeach;
        
        
        $db      = \Config\Database::connect();
        $builder = $db->table('comp');
        
        $compname = [];
        
        if($_SESSION['lang'] == 'en'){
        foreach ($account_numbers as $k => $v):
            
            $CompanyID = explode("_", $v);
            $CompanyID = $CompanyID[2];
            $builder->select('Compname, CompID');
            $builder-> where('CompID', $CompanyID);
            $compname_forloop = $builder->get()->getResultArray();

            $key = $compname_forloop[0]['Compname'];
            $account_numbers[$key] = $v;
            unset($account_numbers[$k]);
        
        endforeach;
        }
        
        if($_SESSION['lang'] == 'tc'){     
                foreach ($account_numbers as $k => $v):
                
                $CompanyID = explode("_", $v);
                $CompanyID = $CompanyID[2];
                $builder->select('ChiCompname, CompID');
                $builder-> where('CompID', $CompanyID);
                $compname_forloop = $builder->get()->getResultArray();
                
                $key = $compname_forloop[0]['ChiCompname'];
                
                $account_numbers[$key] = $v;
                unset($account_numbers[$k]);
                
                endforeach;
            
        }
        
        
        foreach ($policy_numbers as $k => $v):
        
            $CompanyID = explode("_", $v);
            $CompanyID = $CompanyID[2];
            $builder->select('Compname, CompID');
            $builder-> where('CompID', $CompanyID);
            $compname_forloop = $builder->get()->getResultArray();
            
            $key = $compname_forloop[0]['Compname'];
            $policy_numbers[$key] = $v;
            unset($policy_numbers[$k]);
        
        endforeach;
                   
        $sortedlistofformfields['temp_acc_no'] =  $account_numbers;
        
        $sortedlistofformfields['temp_policy_no'] =  $policy_numbers;
        
        

        $sortedlistofformfields['formtoaccount'] = $formtoaccount;
        
        
        
        //echo "<pre>";
        //echo print_r($sortedlistofformfields);
        //echo "</pre>";

        return  $sortedlistofformfields;
        
    }
    
    
}

