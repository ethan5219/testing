<?php

// Converts frontend inputs into the backend inputs

namespace App\Models;

use CodeIgniter\Model;

class Convert_to_backend extends Model
{
    protected $table = 'subserfun';
    
    public function Convert_to_backend_data_function($slug = FALSE)
    {          
        
        $session = \Config\Services::session();

       
        $hash = $_SESSION['user_hash'];
        
        $forms = $_SESSION['Tables'];
                
        
        // Retrieve List of Forms 
        //Generate Form field Based on Table and Form ID passed from function above
        $db      = \Config\Database::connect();
        $builder = $db->table('forman');
        $builder->select('*');
        $builder->orWhereIn('FormID',$forms['FormID']);
        $formfields = $builder->get()->getResultArray();
        
        // Returns Forman Array
        foreach ($formfields as $key => $value):
        $formfields[$key] = array('tablename' => 'forman') + $value;
        endforeach;
        
        
        
        
        $i = 0;
        
        foreach ($forms["FormID"] as $key => $value):
            $forms["FormID"][$key] = $key;
        endforeach;
        

        foreach ($forms as $x):
        foreach ((array) $x as $key => $value):
        if(strval($key) == 'SubSerFunName') {
            $builder = $db->table($value);
            $builder->select('*');
            $builder->orWhereIn('FormID',$forms['FormID']);
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
        
        $mandatoryformfields = [];
        $particularformfields = [];
        
        $i = 0;
        $y = 0;
        
        // To assign index of the formfield before making unique values
        $z = 0;
        

        $parsedmandatoryformfields = [];
        
        
        // Removes unneeded headers at top of array
        $list_of_forms = [];
        
        
        //array of forms 
        foreach ($formfields as $xyz):
        if ($xyz['tablename'] == 'forman') {
            $zz = $xyz['FormID'];
            $temp[$zz] = array_slice($xyz, 6);
            $mandatoryformfields = array_merge($mandatoryformfields, $temp);
            $i += 1;
        }
        
        else {
            $zz = $xyz['FormID'];
            $temp[$zz] = array_slice($xyz, 2);
            $particularformfields = array_merge($particularformfields, $temp);
            $i += 1;
            
        }
                
        endforeach;
        
        $final_array = array_merge_recursive($mandatoryformfields, $particularformfields);
        
        $i = 0;
        

        $IDDocChoices = [];
        foreach ($final_array as $yy => $xyz):
            foreach ($xyz as $key => $value):
            // iterating over the database columns to find the data for mandatory area
            
            if ($i == 0 or $i % 3 == 0){
                if ($value == 1){
                    $y = 1;
                    $parsed_final_formfields[$yy][$key] = $value;
                                        
                }
            }        
            
            $i += 1;
            endforeach;
            
            // to implement multi id options 
            if(!empty($xyz['IDDocTyCho'])) {
                $IDDocChoices[$yy] = array_flip(explode(', ', $xyz['IDDocTyCho']));
                
            }
            
            $z += 1;
            
        endforeach;
        


        
        $json_dict = [];

    
        
        
        //  translate back to database backend langauge
        $db      = \Config\Database::connect();
        $builder = $db->table('dictionary');
        $builder->select('*');
        $namesoffields = $builder->get()->getResultArray();
        
        
        foreach($parsed_final_formfields as $key => $value):   
        foreach ($value as $key2 => $value2):
        // Get unfilled form of companies
        $location = array_search($key2,array_column($namesoffields,'db_name'));
        $remappeditextname = $namesoffields[$location]['itext_name'];
        $json_dict[$key][$remappeditextname] = $value2;
        
        endforeach;
        endforeach;
        

        

        
        if($_SESSION['lang'] == 'en'){
        foreach ($slug as $key => $value):
        foreach ($value as $key2 => $value2):
        foreach ($value2 as $key3 => $value3):
            $accountnotemp[$value3] = explode('+', $key3);
            $location = array_search($key3,array_column($namesoffields,'frontend_name'));
            $remappeditextname = $namesoffields[$location]['itext_name'];   
            $formvalues[$remappeditextname] = $value3;
        endforeach;
        endforeach;
        endforeach;
        }
        
        if($_SESSION['lang'] == 'tc'){
            foreach ($slug as $key => $value):
            foreach ($value as $key2 => $value2):
            foreach ($value2 as $key3 => $value3):
            $accountnotemp[$value3] = explode('+', $key3);
            $location = array_search($key3,array_column($namesoffields,'Chi_frontend_name'));
            $remappeditextname = $namesoffields[$location]['itext_name'];
            $formvalues[$remappeditextname] = $value3;
            endforeach;
            endforeach;
            endforeach;
        }
               
        $accountno = [];
        
        //echo "<pre>";
        //echo print_r($formvalues);
        //echo "</pre>";
        
       
        //get account no for different companies
        foreach ($accountnotemp as $key => $value):
            $formid = $value[0];
            $accountno[$formid] = $key;             
        endforeach;
        
        
        
        $formvalues ["Account Number"] = "temp";
        ;
        
        
        //echo "<pre>";
        //echo print_r("accountnumbers");
        //echo "</pre>";
        //echo "<pre>";
        //echo print_r($accountno);
        //echo "</pre>";
        

        
       
        foreach ($json_dict as $key => $value):
            //changes array values to match form answers based on form 
            
            $combinedvalues = array_merge($value, $formvalues);  
        
            
            //echo "<pre>";
            //echo print_r($combinedvalues);
            //echo "</pre>";
            
        
            //returns a new array with values that were in the original array     
            
            $intersect = array_intersect_key($combinedvalues, $value); 

            
            $intersect = array_map(
                function($v) { if ($v == 1) $v = ""; return $v; },
                $intersect
                );
            

            
            if (array_key_exists('Account No', $intersect) & array_key_exists($key, $accountno)):
                $intersect["Account No"]  = $accountno[$key];
            endif;
            
            if (array_key_exists('Policy No', $intersect) & array_key_exists($key, $accountno)):
                $intersect["Policy No"]  = $accountno[$key];
            endif;
                        
            
            // get array to change id document type if does not exist at form level 
            if(array_key_exists('ID Document Type',$intersect) & array_key_exists($key,$IDDocChoices)){
                if(!array_key_exists($intersect['ID Document Type'], $IDDocChoices[$key])){
                $intersect['ID Document Type'] = 'Others';
                              

                
            };
            };
            

            //echo "<pre>";
            //echo print_r($intersect);
            //echo "</pre>";
            
                       
            $intersect = array_filter($intersect);
            
            $intersect = json_encode($intersect);
            


            $itext_array[$key] = $intersect;
            
        endforeach;
        
       
        $final_itext_array  = $itext_array;

        $counter = 0;
        
        function posttobackend($url, $postVars = array()){
            //Transform our POST array into a URL-encoded query string.
            $postStr = http_build_query($postVars);
            //Create an $options array that can be passed into stream_context_create.
            $options = array(
                'http' =>
                array(
                    'method'  => 'POST', //We are using the POST HTTP method.
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'content' => $postStr //Our URL-encoded query string.
                )
            );
            //Pass our $options array into stream_context_create.
            //This will return a stream context resource.
            $streamContext  = stream_context_create($options);
            //Use PHP's file_get_contents function to carry out the request.
            //We pass the $streamContext variable in as a third parameter.
            $result = file_get_contents($url, false, $streamContext);
            //If $result is FALSE, then the request has failed.

            //If everything went OK, return the response.
            return $result;
        }
        

        
        //echo "<pre>";
        //echo print_r($itext_array);
        //echo "</pre>";
        
        
        
        foreach ($itext_array as $key => $value):
            
        
            $param = json_encode($value);
        
            $param = preg_replace('~^"?(.*?)"?$~', '$1',  $param); // double quotes
            $param = preg_replace('~^[\'"]?(.*?)[\'"]?$~', '$1',  $param); // either ' or " whichever is found
            
            //$path = "..\\Java\\target\\classes";
        
            //$command = "cd ".$path." && ".'java -classpath ".;*" jumpstart '.$key." ".$param." ".$hash ;
            //$counter = $counter + 1;
            
            //echo print_r($command);
            //shell_exec($command);
            
            //
            // Send a POST request without using PHP's curl functions.
            //
            // @param string $url The URL you are sending the POST request to.
            // @param array $postVars Associative array containing POST values.
            // @return string The output response.
            // @throws Error If the request fails.
            
            //echo "<pre>";
            //echo print_r($param);
            //echo "</pre>";
     
            
            //$json ="{	\"Building\":\"英文 English\",\"Account Chi Surname_Account Chi Forename\":\"保管箱號碼\",\"Change Securitites Address Toggle\":\"rA~8S\",\"Change Current Account Address Toggle\":\"oN*29\",\"Chi Surname_Chi Forename\":\"nN*3E\",\"Change Saving Account Address Toggle\":\"uX*5D\",\"Other Country Code_Other Phone Number\":\"lG-1r\",\"Change Electronic Finance Address Account No\":\"保管箱號碼\",\"Safe Deposit Box No\":\"hE*2x\",\"Change Time Deposit Address Account No\":\"uO-8g\",\"Change Current Account Address Account No\":\"gP~0-\",\"Eng Surname_Eng Forename\":\"保管箱號碼rU*5A\",\"Street\":\"hC~9j\",\"Other Address\":\"fZ~7W\",\"Change All Address Only Toggle\":\"xJ-4-\",\"Change Residential Address Only Toggle\":\"iF~7*\",\"Change Date\":\"xK-5M\",\"Floor\":\"oI*9c\",\"Account Eng Surname_Account Eng Forename\":\"aU-59\",\"Residential Address\":\"xB*7b\",\"Change Correspondence Address Only Toggle\":\"mL-4h\",\"Residential Phone Country Code _Residential Phone Number\":\"mU*42\",\"Estate\":\"fP-6d\",\"PO Box\":\"lV-1N\",\"Change Saving Account Address Account No\":\"保管箱號碼\",\"Date\":\"aC~9J\",\"Loan Account\":\"保管箱號碼\",\"Change Time Deposit Address Toggle\":\"zS*4Q\",\"Debt Instrument Account\":\"hL*70\",\"toggle_8\":\"bK-8Y\",\"toggle_4\":\"hR-3*\",\"Flat\":\"qL-9I\",\"Country\":\"qL*1a\",\"Block\":\"保管箱號碼\",\"Mobile Phone Country Code_Mobile Phone Number\":\"cB~5y\",\"Fax No Country Code_Fax No Number\":\"fU~1h\",\"Office Phone Country Code_Office Phone Number\":\"保管箱號碼\",\"Change Time\":\"\",\"Change Electronic Finance Address Toggle\":\"nU~0o\",\"ID Document No\":\"保管箱號碼\",\"District\":\"tQ*44\",\"Change Securities Address Account No\":\"yI*7B\",\"Email Address\":\"hV-6q\"}";
            

            //$json ="{\"Text Box 2\":\"Text Box 2~TXT~xM英文4\",\"Text Box 3\":\"Text Box 3~TXT~英文WA5\",\"Text Box 1\":\"Text Box 1~英文TXT~英文B5\",\"Nationality\":\"sdjkvnsjdkfjksf\",\"Effective Date\":\"21-12-1986\",\"TN\":\"Yes\",\"Account No\":\"Account No~TXT~?英文J英文9\",\"Nationality@ID Document Type@Local\":\"\",\"ID Document Type\":\"One\",\"Nationality@ID Document Type@Other\":\"\",\"AP\":\"Yes\"}";
            
            //$json ="{\"Text Box 2\":\"firstpart\",\"Text Box 3\":\"secondpart\",\"Text Box 1\":\"Text Box 1~TXT~mPB8\",\"Nationality\":\"One\",\"Effective Date\":\"10-10-2010\",\"TN\":\"Off\",\"Account No\":\"Account No~TXT~?J?2\",\"Nationality@ID Document Type@Local\":\"\",\"ID Document Type\":\"Three\",\"Nationality@ID Document Type@Other\":\"\",\"AP\":\"Yes\"}";
            
            $json = $param; 
            
            $formid = $key;

            $hashcode = $hash;
            
            $url = 'http://localhost:8083/';
            
            //echo "<pre>";
            //echo print_r($hashcode);
            //echo "</pre>";
            
            $data = array('data' =>$json,'formid' => urlencode($formid),'hashcode' => urlencode($hashcode));
            
            //echo "<pre>";
            //echo print_r($data);
            //echo "</pre>";
            
            $result = posttobackend($url, $data);

            
            //echo "<hr/>";
            
            
            //echo $result;

        endforeach;
                  
    }

}