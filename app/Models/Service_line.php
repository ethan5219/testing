<?php

namespace App\Models;

use CodeIgniter\Model;

class Service_line extends Model
{
    protected $table = 'serfun';
    
    public function find_service_line($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            return $this->findAll();
        }
        
        return $this->asArray()
        ->where(['slug' => $slug])
        ->first();
    }
    
}