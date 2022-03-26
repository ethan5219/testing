<?php

namespace App\Models;

use CodeIgniter\Model;

class User_profile_model extends Model

{

    public function login_authentication($slug = FALSE)
    {
        $db      = \Config\Database::connect('user_profiles');
        $builder = $db->table('accounts');
        $model = new Company_by_serviceline();
        
        
        
       
        $builder->select('*');

        $builder-> where('username', $slug['username']);
        $users = $builder->get()->getResultArray();
        

        
        /*
        
        echo print_r($users);
        

        
        
        echo "<pre>";
        echo print_r ($slug['password']);
        echo "</pre>";
        
        echo "<pre>";
        echo var_dump ($users[0]['password']);
        echo "</pre>";
        
        
        echo "<pre>";
        echo print_r (gettype($users[0]['password']));
        echo "</pre>";
        
        
        echo "<pre>";
        echo print_r (password_verify($slug['password'],$users[0]['password']));
        echo "</pre>";
        
        
        
        */
        //no user exists check
        if(!empty($users)) {        
            

            //password wrong
            if (password_verify($slug['password'], $users[0]['password'])) {
                if ($users[0]['verified'] == 1) {
                
                    $_SESSION["loggedin"] = 'yes';
                    $_SESSION["id"] = $users['id'];
                    $_SESSION["username"] = $users['username'];
                    $_SESSION['email'] = $users['email'];
                    $_SESSION['verified'] = 1;
                    $_SESSION['message'] = 'You are logged in!';
                    $_SESSION['type'] = 'alert-success';
                    return 'login-passed';
                }
                else {
                    $_SESSION['id'] = $user_id;
                    $_SESSION['username'] = $slug['username'];
                    $_SESSION['email'] = $slug['email'];
                    $_SESSION['verified'] = 0;
                    $_SESSION['message'] = 'You are logged in!';
                    $_SESSION['type'] = 'alert-success';
                    $_SESSION['login-message'] = 'Passed';
                    return 'need-verify';
                }
            } 
            else {
                $_SESSION['login-message'] = 'Username or password is incorrect';
                return 'login-failed';
            }
        }
        
        else {
            $_SESSION['login-message'] = 'User does not exist';
            return 'login-failed';
        }
        

        
        
    }
    
    
    
    public function user_registration($slug = FALSE)
    {
        $db      = \Config\Database::connect('user_profiles');
        $builder = $db->table('accounts');
        $session = \Config\Services::session();

        
        $builder->select('*');
        
        $builder-> Where('username', $slug['username']);
        $builder-> orWhere( 'email', $slug['email']);
        
        $checker = $builder->get()->getResultArray();
        
        /*
        echo "<pre>";
        echo print_r ($checker);
        echo "</pre>";
        $errors = [];
        */
        $errors = [];
        
        if ($checker) { // if user exists
            if ($checker[0]['username'] ===  $slug['username']) {
                $errors['username'] =  "Username already exists";
                $_SESSION['register-message']['username'] = "Username already exists";
            }
            
            if ($checker[0]['email'] === $slug['email']) {
                $errors['email'] =  "Email is already registered";
                $_SESSION['register-message']['email'] = "Email is already registered";

            }
            return $errors;
        }
        
        
        if (count($errors) == 0) {

            $password = password_hash($slug['password_1'], PASSWORD_DEFAULT);
            $user_details = [
                'username' => $slug['username'],
                'email'    => $slug['email'],
                'password' => strval($password),
                'token' =>  bin2hex(random_bytes(50))
                
            ];
            
            $db->table('accounts')->insert($user_details);
            
            
            $builder->select('*');
            
            $builder-> Where('username', $slug['username']);
            $builder-> orWhere('email', $slug['email']);
            $checker = $builder->get()->getResultArray();
            $user_id = $checker[0]['id'];
            
            
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $slug['username'];
            $_SESSION['email'] = $slug['email'];
            $_SESSION['verified'] = 0;
            $_SESSION['message'] = 'You are logged in!';
            $_SESSION['type'] = 'alert-success';
            
            /*
            echo "<pre>";
            echo var_dump($slug['password_1']);
            echo "</pre>";
             
            
            echo "<pre>";
            echo var_dump($password);
            echo "</pre>";
            
            echo "<pre>";
            echo print_r (gettype($password));
            echo "</pre>";
            
            
            
            echo "<pre>";
            echo print_r (password_verify($slug['password_1'], $password));
            echo "</pre>";
            
             */
            
            return "submitted";
        }
        
       
        
    }
    
    public function email_validation($slug = FALSE)
    {
        /*
         * Queries the backend to get the data to generate a validation email to be sent to users
         */
        $model = new User_profile_model();
        $db      = \Config\Database::connect('user_profiles');
        $builder = $db->table('accounts');
        
        
        
        $builder->select('*');
        
        $builder-> where('username',$_SESSION['username']);
        $users = $builder->get()->getResultArray();

        // token tp semd to email for validation
        
        $model->send_email($users);

        return "submitted";
        
        
        
        
    }
    
    public function send_email($slug = FALSE)
    {
        $db      = \Config\Database::connect('user_profiles');
        $builder = $db->table('accounts');

        
        
        //email-verfication?token=/
        //echo print_r(base_url('email-verfication?token='.$slug[0]['token']));
        
        $token_link = base_url('email-verfication?token='.$slug[0]['token']);
        
        $data =  [
            'link'   => $token_link,
            'heading' => 'My Heading',
            'message' => 'My Message',
        ];
        
    
        
        $message =  view('users/welcome_email_message', $data);
        $email = \Config\Services::email();
        $email->setTo($slug[0]['email']);
        $email->setFrom('contact@fill-easy.com');
        
        $email->setSubject('Welcome to Fill Easy!');
        $email->setMessage($message);//your message here      
        
        if ($email->send()) {
            echo 'Email successfully sent, please check';
        } else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
        
    }
    
    public function verfication_email_post($slug = FALSE)
    {
        $db      = \Config\Database::connect('user_profiles');
        $builder = $db->table('accounts');
        
        $session = \Config\Services::session();
        
        
        $builder->select('*');
        
        $builder->where('token', $slug);
        

        $data = [
            'verified' => 1,
        ];
        
        $builder->update($data);
        
        $builder->where('token', $slug);
        
        $users = $builder->get()->getResultArray();
        
        

        $_SESSION['id'] = $users[0]['id'];
        $_SESSION['username'] = $users[0]['username'];
        $_SESSION['email'] = $users[0]['email'];
        $_SESSION['verified'] = 1;
        $_SESSION['message'] = "Your email address has been verified successfully";
        $_SESSION['type'] = 'alert-success';
        
        echo "<pre>";
        echo print_r($_SESSION);
        echo "</pre>";
        


        
    } 
    
    public function check_duplicate($slug = FALSE)
    {

        $db      = \Config\Database::connect('user_profiles');
        $builder = $db->table('accounts');
        $session = \Config\Services::session();
        
        
        $builder->select('*');
        

        
        

        
        if (isset($slug['username'])) {
            $builder-> Where('username', $slug['username']);
            $checker = $builder->get()->getResultArray();
            
            if(!empty($checker)) {       

                return false;
            } else {
                return true;
            }
            
            

        }
        
        
        if (isset($slug['email'])) {
            $builder-> Where('email', $slug['email']);
            $checker = $builder->get()->getResultArray();
            
            if(!empty($checker)) {
                
                return false;
            } else {
                return true;
            }
            
            
            
        }
        
    
        

        
    } 
    
    
    public function forgot_password($slug = FALSE)
    {
        
        $db      = \Config\Database::connect('user_profiles');
        $builder = $db->table('accounts');
        $session = \Config\Services::session();
        $model = new User_profile_model();
        
        

        
        echo print_r($slug);
        
        if (isset($slug['email'])) {
            $builder->select('*');
            $builder-> where('email', $slug['email']);
            $user = $builder->get()->getResultArray();
            
            echo print_r($user);                        
            if(!empty($user)) {
                
                $token = bin2hex(random_bytes(50));
                
                $user_details = [
                    'token' => $token     
                ];

                $builder-> where('email', $slug['email']);
                $builder->update($user_details);
                
                $data = [
                    'token' => $token,
                    'email' => $slug['email']
                ];
                
                //send reset email password
                $model->send_email_password_reset($data);
               
            } 
            
            
        }
    
    }
    

    public function send_email_password_reset($slug = FALSE)
    {
        $db      = \Config\Database::connect('user_profiles');
        $builder = $db->table('accounts');

        //email-verfication?token=/
        //echo print_r(base_url('email-verfication?token='.$slug[0]['token']));
        
        $token_link = base_url('users/reset-password-update-password?token='.$slug['token']);
        
        echo print_r($token_link);
        
        $data =  [
            'link'   => $token_link,
            'heading' => 'My Heading',
            'message' => 'My Message',
        ];
        
        
        
        $message =  view('users/password_reset_message', $data);
        $email = \Config\Services::email();
        $email->setTo($slug['email']);
        $email->setFrom('contact@fill-easy.com');
        
        $email->setSubject('Fill Easy - Password Reset');
        $email->setMessage($message);//your message here
        
        if ($email->send()) {
            echo 'Email successfully sent, please check';
        } else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
        
    }
    
    
    public function password_reset_submission($slug = FALSE)
    {
        $db      = \Config\Database::connect('user_profiles');
        $builder = $db->table('accounts');
                
        $builder->select('*');
        
        $builder->where('token', $slug['token']);
        
        //generate new password per salt + hashing method
        $password = password_hash($slug['password'], PASSWORD_DEFAULT);
        
        $data = [
            'password' => $password,
        ];
        
        $builder->update($data);
        
        return 'done';
        
        
    }
    
    
    
    public function password_reset_update_password_form_post($slug = FALSE)
    {
        $db      = \Config\Database::connect('user_profiles');
        $builder = $db->table('accounts');
        $session = \Config\Services::session();
        

        $password = password_hash($slug['password_1'], PASSWORD_DEFAULT);
        
        $data = [
            'password' => $password,
        ];
        
        
        $builder->select('*');
        
        $builder->where('token', $token);
        $builder->update($data);
        
        return 'done';
        
        
    }
    

    
    
    

}

        
        
/*
            

            // Validate credentials

                // Prepare a select statement
                $sql = "SELECT id, username, password FROM users WHERE username = ?";
                
                if($stmt = mysqli_prepare($link, $sql)){
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "s", $param_username);
                    
                    // Set parameters
                    $param_username = $username;
                    
                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        // Store result
                        mysqli_stmt_store_result($stmt);
                        
                        // Check if username exists, if yes then verify password
                        if(mysqli_stmt_num_rows($stmt) == 1){
                            // Bind result variables
                            mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                            if(mysqli_stmt_fetch($stmt)){
                                if(password_verify($password, $hashed_password)){
                                    // Password is correct, so start a new session
                                    session_start();
                                    
                                    // Store data in session variables
                                    $_SESSION["loggedin"] = true;
                                    $_SESSION["id"] = $id;
                                    $_SESSION["username"] = $username;
                                    
                                    // Redirect user to welcome page
                                    header("location: welcome.php");
                                } else{
                                    // Password is not valid, display a generic error message
                                    $login_err = "Invalid username or password.";
                                }
                            }
                        } else{
                            // Username doesn't exist, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    
                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            
            
            // Close connection
            mysqli_close($link);
        }
        
        return $finalarray;
    }
*/
    
