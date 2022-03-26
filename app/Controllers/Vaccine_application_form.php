<?php

namespace App\Controllers;
use App\Models\Vaccine_auto_submit;

class Vaccine_application_form extends BaseController {
    
    public function index()
    {
        
        echo view('Form Fields/Vaccine_Application_form_view.php');
        
    }
    
    public function submit()
    {
        $model = new Vaccine_auto_submit();   
        
        $postdata = $_POST;
        
        
        $response = $model -> submit_vaccine_form_model($postdata);
        


        echo print_r($postdata);
        echo ($response);
        

    }
    
    public function list_of_vaccines()
    {
        
        echo view('Vaccine_views/Vaccine_list_of_promotions.php');
        
    }
}

