<?php

namespace App\Controllers;

use App\Models\User_profile_model;

class user_profiles extends BaseController {
    
    public function login_page()
    {
        

        $session = \Config\Services::session();
        // Set Language variable
        
        if(isset($_POST['lang']) && !empty($_POST['lang'])){
            $_SESSION['lang'] = $_POST['lang'];
            
        }
        

        //check if logged in
        if(array_key_exists('id',$_SESSION) && array_key_exists('username',$_SESSION)){
            return redirect()->to('/home');
        }
        
        
        //if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            //exit;
        //}.
        
        $data = [];
        
        if(array_key_exists('login-message',$_SESSION)){
            $data = ['message' => $_SESSION['login-message']];
        }


        
        
        if(!array_key_exists('lang',$_SESSION)){
            $_SESSION['lang'] = 'en';
        }
        
        if($_SESSION['lang'] == 'en'){
            
            echo view('users/login_page',$data);
            echo view('admin/footer');
        }
        
        
        if($_SESSION['lang'] == 'tc'){
            
            echo view('users/login_page',$data);
            echo view('admin/footer_tc');
        }
        
        unset($_SESSION['login-message']);
        
        
        
    }
    
    public function login_auth()
    {
        if($this->request->getMethod() === 'post')
        {
            $model = new User_profile_model();
            $session = \Config\Services::session();
            
   
            $data = $model->login_authentication($_POST);
            
            if($data === 'login-passed') {
                return redirect()->to('/home');

            }
            
            if($data === 'login-failed') {
                return redirect()->to('/login');
                
            }
            
            if ($data === 'need-verify'){
                return redirect()->to('/email-validation');
            }
        
            
        }
    }
     
     public function register()
     {
         $session = \Config\Services::session();
         if(isset($_POST['lang']) && !empty($_POST['lang'])){
             $_SESSION['lang'] = $_POST['lang'];
             
         }
         
         $data = [];
         
         
         //check if logged in
         if(array_key_exists('id',$_SESSION) && array_key_exists('username',$_SESSION)){
             return redirect()->to('/home');
         }
         

         
         if(array_key_exists('register-message',$_SESSION)){
             $data = $_SESSION['register-message'];
            
         }
         
         
         
         if($_SESSION['lang'] == 'en'){
           
             echo view('users/registration_page', $data);
             echo view('admin/footer');

         }
         
         
         if($_SESSION['lang'] == 'tc'){
             
             echo view('users/registration_page_tc', $data);
             echo view('admin/footer_tc');

         }
         
         unset($_SESSION['register-message']);
         
         
     }
     
     
     public function register_post()
     {
         $model = new User_profile_model();
         $session = \Config\Services::session();
         $data = $model->user_registration($_POST);
         
         if(isset($_POST['lang']) && !empty($_POST['lang'])){
             $_SESSION['lang'] = $_POST['lang'];
             
         }
         
         if ($data === "submitted") {
         
             if($_SESSION['lang'] == 'en'){
                 
                 return redirect()->to('/email-validation');
                 
             }
             
             
             if($_SESSION['lang'] == 'tc'){
                 
                 return redirect()->to('/email-validation');
                 
             }
         }
         
         else {
             
             if($_SESSION['lang'] == 'en'){
                 
                 return redirect()->to('/register');
                 
             }
             
             
             if($_SESSION['lang'] == 'tc'){
                 
                 return redirect()->to('/register');
                 
             }
         }
                                                                                                    
     }
     
     public function verify_email()
     {
         $model = new User_profile_model();
         $session = \Config\Services::session();

         

         $data = $model->email_validation();
         
         if(isset($_POST['lang']) && !empty($_POST['lang'])){
             $_SESSION['lang'] = $_POST['lang'];
             
         }
         
         if($_SESSION['lang'] == 'en'){
             
             echo view('users/email_pending');
             echo view('admin/footer');

             
         }
         
         
         if($_SESSION['lang'] == 'tc'){
             
             echo view('users/email_pending');
             echo view('admin/footer');

             
         }
         
         
     }
     
     public function verfication_email()
     {
         $model = new User_profile_model();
         $session = \Config\Services::session();
         
         if (isset($_GET['token'])) {
             
         
         $token = $_GET['token'];

         
         $data = $model->verfication_email_post($token);
         
         
         
         if(isset($_POST['lang']) && !empty($_POST['lang'])){
             $_SESSION['lang'] = $_POST['lang'];
             
         }
         
         if($_SESSION['lang'] == 'en'){
             
             echo view('users/email_verified');
             
             
         }
         
         
         if($_SESSION['lang'] == 'tc'){
             
             echo view('users/email_verified');
             
             
            }
         }
         else {
             echo "No token provided!";
         }
         
         
     }
     public function check_duplicate($slug = FALSE) {


         
         $model = new User_profile_model();

         
         //$data = $model->check_duplicate($_POST);

         
         $data = $model->check_duplicate($_POST);

         echo json_encode(array(
             'valid' => $data,
         ));
         
        
     }
     
     public function logout($slug = FALSE)
     {
         $session = \Config\Services::session();
         session_destroy();
         unset($_SESSION['id']);
         unset($_SESSION['username']);
         unset($_SESSION['email']);
         unset($_SESSION['verify']);
         echo view('users/login_page');
         echo view('admin/footer');
         
     }
     
     public function password_reset_enter_email($slug = FALSE)
     {
         $session = \Config\Services::session();
         
         
         echo view('users/reset_password_form');
         
     }
     
     public function password_reset_post_auth_token($slug = FALSE)
     {
         
         $model = new User_profile_model();
         $session = \Config\Services::session();
         

             
         $data = $model->forgot_password($_POST);
         
         echo view('users/email_pending');
         
         
     
     }
     
     public function password_reset_update_password_form($slug = FALSE)
     {
         $session = \Config\Services::session();
         if (isset($_GET['token'])) {
             $_SESSION ['token'] = $_GET['token'];
             
             echo print_r($_SESSION['token']);
             echo view('users/reset_password_new_password');
         }
         
     }
     
     
     public function password_reset_update_password_form_post ($slug = FALSE)
     {
         $model = new User_profile_model();
         $session = \Config\Services::session();
         $data = $model->password_reset_update_password_form_post($_POST);
         
         
         echo view('users/email_verified');
     }

         
     
     
     
            
}
        

   

