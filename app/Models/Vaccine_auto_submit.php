<?php
namespace App\Models;

use CodeIgniter\Model;


class Vaccine_auto_submit extends Model

{
    public function submit_vaccine_form_model($slug = FALSE)
    {
        $path = "..\\python\\";
        
        $phone_number = $slug['Phone_Number'];
        
        $ID = $slug['ID'];
        
        $HendersonID = $slug['hendersonencrypt'];
        
        $command = "cd ".$path." && "."Draw_29.py ".$phone_number." ".$ID." ".$HendersonID;
        
        echo $command;
        
        $response = shell_exec($command);
        
        return $response;

    }
}
