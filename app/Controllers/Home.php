<?php

namespace App\Controllers;

//use App\Models\Service_line;
//use App\Models\Company_by_serviceline;
//use App\Models\Choose_serviceline;
//use App\Models\Post_to_database;

class Home extends BaseController {
    

    
    public function index()
    {
        $session = \Config\Services::session();
        // Set Language variable
                
        return view ("welcome_message");

            
        }

     

    
            

    
  
    
    

       
}
    
    
