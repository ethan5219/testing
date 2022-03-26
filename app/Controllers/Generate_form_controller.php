<?php

namespace App\Controllers;

use App\Models\Generate_form;
use App\Models\Convert_to_backend;

class Generate_form_controller extends BaseController {
    
    
    public function generate_form_controller($slug = null)
    {
        
        date_default_timezone_set("Asia/Hong_Kong");
        
        $model = new Generate_form();
        
        $session = \Config\Services::session();
        if (!isset($_SESSION['user_hash'])){
            $_SESSION['user_hash'] = hash('tiger192,3',random_int(1, 1000000000)); 
        }

        if($this->request->getMethod() === 'post')
        {
            $postdata = $_POST;
            
            
            //echo "<pre>";
            //echo print_r($postdata);
            //echo "</pre>";
            
            
            //shifting array level to match orignal model
            $formids['FormID'] = $postdata;
            $formids['Serviceline'] = $formids['FormID']['Serviceline'];
            unset($formids['FormID']['Serviceline']);
            unset($formids['FormID']['Submit']);
            $compname = $formids['FormID'];
            
            $formfields = $model->generate_form_model($formids);
            
            
            if (empty($formfields['temp_acc_no'])) {
                unset($formfields['temp_acc_no']);
                $accountnocompname = array();
            }
            
            if (empty($formfields['temp_policy_no'])) {
                unset($formfields['temp_policy_no']);
                $accountnocompname = array();
            }
            
            if (!empty($formfields['temp_acc_no'])) {

                $accountnocompname['Account Number'] = $formfields['temp_acc_no']; 
                unset($formfields['temp_acc_no']);
            }
            
            if (!empty($formfields['temp_policy_no'])) {
                
                $accountnocompname['Policy Number'] = $formfields['temp_policy_no'];
                unset($formfields['temp_policy_no']);
            }

            
            if (!empty($formfields['formtoaccount'])) {
                $formtoaccount = $formfields['formtoaccount'];
                unset($formfields['formtoaccount']);
            }
            
          //echo "<pre>";
          //echo print_r($accountnocompname);
          //echo "</pre>";
            
          //echo "</pre>";
          //echo print_r($formfields);
          //echo "</pre>";
          
          //echo "<pre>";
          //echo print_r($_SESSION);
          //echo "</pre>";
            
                        
            $formdata = [
                'formfields' => $formfields,
                'title' => 'Form Fields',
                'accountnocompname' => $accountnocompname,
                'formtoaccount' => $formtoaccount
            ];
            
                        
            
            $id_time = date("Y-m-d h:i:sa",time());
            
            array_walk_recursive($_SESSION['Tables']['FormIDdict'], function ($value, $key) use (&$implodeforms){
                $implodeforms[] = $value;
            },$implodeforms);


            
            $logdata = array(
                'hash' => $_SESSION['user_hash'],
                'forms' => implode(", ",$implodeforms),
                'time' => $id_time
            );
            
            
            //echo "<pre>";
            //echo print_r($_SESSION);
            //echo "</pre>";
            
            
            if (!isset($_SESSION['logfile']))
            {
                $db = \Config\Database::connect("audit");
                $db->table('form_initialized_log')->insert($logdata);
            }
            
            $_SESSION['logfile'] = 'posted-to-database'; 
            
            if($_SESSION['lang'] == 'en'){

                echo view('Form Fields/Form_Fields', $formdata);
                echo view('admin/footer');
            }
            

            if($_SESSION['lang'] == 'tc'){

                echo view('Form Fields/Form_Fields_tc', $formdata);
                echo view('admin/footer_tc');
            }
        }
        
    }
    
    public function call_itext($slug = null)
    {

        $model = new Convert_to_backend();
        
        if($this->request->getMethod() === 'post')
        {
            $session = \Config\Services::session();
            
            $forms = $_SESSION['Tables']['FormID']; 
            $hash  = $_SESSION['user_hash']; 
            $postdata = $_POST;
            

            //if(!is_dir("..\\Java\\target\\classes\\results\\".$hash)) {
               $model -> Convert_to_backend_data_function($postdata);
           // }
            
            
            // $x = $model->Convert_to_backend_data_function($postdata);
            $data = [
                //'formfields' => $model->Convert_to_backend_function($postdata),
                'title' => 'Form Fields',
                'forms' => $forms,
                'hash'  => $_SESSION['user_hash'],
                'dict'  => $_SESSION['Tables']['FormIDdict'],
                
            ];
            
            
            $id_time = date("Y-m-d h:i:sa",time());
            
            $logdata = array(
                'hash' => $hash,
                'forms' => implode(", ",$forms),
                'time' => $id_time
            );
            
            //echo "<pre>";
            //echo print_r($_SESSION);
            //echo "</pre>";

            if ($_SESSION['logfile'] = 'posted-to-database')
            {
                $db = \Config\Database::connect("audit");
                $db->table('downloaded_form_log')->insert($logdata);
            }
            

            
            $_SESSION['logfile'] = 'posted-to-database-done'; 
            
            if($_SESSION['lang'] == 'en'){
                echo view('admin/header');
                echo view('Form Fields/Form_download', $data);
            }
            
            if($_SESSION['lang'] == 'tc'){
                echo view('admin/header_tc');
                echo view('Form Fields/Form_download_tc', $data);
                echo view('admin/footer_tc');
            }
                        
        }
       
    }
    
    public function downloaditext($seg1 = false)
    {
        
        
        $segments = $this->request->uri->getSegments();
        

        $data = [
            'formid' => $segments[1],
        ];


        echo view('Form Fields/itext', $data);
    }
    


}


