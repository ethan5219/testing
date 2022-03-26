<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\Company_by_serviceline;

class Company_by_serviceline extends Model
{
    protected $table = 'subserfun';
    
    public function search_company_by_serviceline($slug = FALSE)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('subserfun');
        $model = new Company_by_serviceline();
        
        if ($slug === FALSE)
        {
            return $this->findAll();
        }
        
        $builder->select('*');
        $builder->orWhereIn('SubSerFunFrontendName', $slug);
        $query = $builder->get()->getResultArray();
                
        $frontendquery = $model->find_list_of_valid_companies($query);
        $NA_Companies = $model->find_NA_companies();
        
        $finalarray = array_merge($frontendquery, $NA_Companies);
     
        
              
        return $finalarray;
    }
    
    function find_NA_companies ($slug = FALSE)
    {
        $db    = \Config\Database::connect();
        $model = new Company_by_serviceline();
        
        $builder = $db->table('comp');
        $builder->select('Compname, CompID, Frontend_Sorting');
        $builder-> where('Frontend_Sorting', '20');
        $NA_Companies = $builder->get()->getResultArray();
        
                
        return $NA_Companies;
    }
    
    function find_list_of_valid_companies($slug = FALSE)
    {    
        $db    = \Config\Database::connect();
        $model = new Company_by_serviceline();
        
        $formID = [];
    
        foreach ($slug as $x):
        
        $builder = $db->table('serfun_formmapping');
        
        $builder->select($x['SubSerFunName'].", FormID");
        $formID_forloop = $builder->get()->getResultArray();
                
        foreach($formID_forloop as $key=>$row){
            
            if($row['FormID'] == "NA"){
                unset($formID_forloop [$key]);
            }
            if($row[$x['SubSerFunName']] != "TRUE"){
                unset($formID_forloop [$key]);
            }
            
            unset($formID_forloop[$key][$x['SubSerFunName']]);          
        }   
        $formID = array_merge($formID, $formID_forloop);
        endforeach;
                
        $formID = $model->return_list_of_valid_companies($formID);
        
        return $formID;   
    }
    
    
    function return_list_of_valid_companies($slug = FALSE)
    {
        $db    = \Config\Database::connect();
        $model = new Company_by_serviceline();
        
        $compID = [];            
        
        foreach ($slug as $y):
        
            $builder = $db->table('forman');
            $builder->select('CompID, FormID, BusFunID');
            $builder-> where($y);
            $compID_forloop = $builder->get() -> getResultArray();
            $compID = array_merge($compID, $compID_forloop);
            $compID = array_merge($compID, $compID_forloop);

        endforeach;
        
        
        $formID = $model->get_name_of_companies($compID);
        $compID_formID[0] = $formID;  
        $compID_formID[1] = $compID;
        
        
        return $compID_formID;

    }
    
    
    function get_name_of_companies($slug = FALSE)
    {
        
        $db      = \Config\Database::connect();       

        
        $compname = [];
        
        $db    = \Config\Database::connect();
        $model = new Company_by_serviceline();
        
        $builder = $db->table('comp');
        $builder->select('Compnamefrontend, CompID, Frontend_Sorting');
        $builder-> where('Frontend_Sorting', '20');
        $NA_Companies = $builder->get()->getResultArray();
        
        //echo "<pre>";
        //echo print_r($NA_Companies);
        //echo "</pre>";
        
        
       
        
        //get name from database & join live stuff
        if($_SESSION['lang'] == 'en'){
        foreach ($slug as $y):
            $builder = $db->table('comp');
            $builder->select('Compname, CompID, Frontend_Sorting');
            $builder-> where('CompID',$y['CompID']);
            $compname_forloop = $builder->get()->getResultArray();
            
            
            $compname_forloop[0]['FormID'] = $y['FormID'];            
            $builder = $db->table('busfun');
            $builder->select('ID, BusFunName');
            $builder-> where('ID',$y['BusFunID']);
            $resultarray = $builder->get()->getResultArray();
            
            $serviceline = $resultarray[0]['BusFunName'];
      
            $compname_forloop[0]['BusFunID'] =  $serviceline;
            
            $compname_forloop[0]['Available'] =  'yes';
            
            $compname = array_merge($compname_forloop,$compname);
            
            

        endforeach;
        }
                
        if($_SESSION['lang'] == 'tc'){
            foreach ($slug as $y):
            $builder = $db->table('comp');
            $builder->select('ChiCompname, CompID, Frontend_Sorting');
            $builder-> where('CompID',$y['CompID']);
            $compname_forloop = $builder->get()->getResultArray();
            
            
            $compname_forloop[0]['FormID'] = $y['FormID'];
            
            //frontend only takes name "Compname"
            $compname_forloop[0]['Compname'] = $compname_forloop[0]['ChiCompname'];
            unset($y['ChiCompname']);
            
            $builder = $db->table('busfun');
            $builder->select('ID, BusFunName');
            $builder-> where('ID',$y['BusFunID']);
            $resultarray = $builder->get()->getResultArray();
            
            $serviceline = $resultarray[0]['BusFunName'];
            
            $compname_forloop[0]['BusFunID'] =  $serviceline;
            
            $compname_forloop[0]['Available'] =  'yes';
            
            $compname = array_merge($compname_forloop,$compname);
            endforeach;
            
            
        }

               

        
        
        $final_array = [];
        
        $temp = array_unique($compname, SORT_REGULAR);      
        

        //sorting into service line and row order        
        foreach ($temp as $y):
        if (!isset($final_array[$y['BusFunID']])) {
            $final_array[$y['BusFunID']] = [];        
        }
            
            if($y['Frontend_Sorting'] == 10000):
            array_push($final_array[$y['BusFunID']],$y);
            else:
            array_unshift($final_array[$y['BusFunID']],$y);
        
        endif;
        

        
        unset($y['Frontend_Sorting']);
        

        
        endforeach;
        
        $order = array('Personal Banking', 'Insurance', 'MPF');
        $offset = array_search("Account Number", $order);
        
        
        
        
        foreach ($final_array as $key => $value):
        
        $offset = array_search($key, $order);
        
        $final_array[$key]['order'] = $offset;
        
        endforeach;
        
        
        uasort($final_array, function ($a, $b) {
            return $a['order'] <=> $b['order'];
        });
            
            foreach ($final_array as $key => $value):
            
            unset($final_array[$key]['order']);
            
            endforeach;

        

        
        

        
        return $final_array;
        
    }    
}