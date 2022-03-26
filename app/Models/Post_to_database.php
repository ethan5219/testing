<?php

namespace App\Models;

use CodeIgniter\Model;

class Post_to_database extends Model
{
    
    public function contact_form_post($slug)
    {
        $db      = \Config\Database::connect("audit");
        
        
        
        $db->table('contact')->insert($slug);
        // Produces: INSERT INTO mytable (title, name, date) VALUES ('{$title}', '{$name}', '{$date}')
        
        return "OK";
    }
    
}