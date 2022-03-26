<?php
namespace App\Models;

use CodeIgniter\Model;

class Choose_serviceline extends Model
{
    protected $table = 'subserfun';
    
    public function search_company_by_serviceline_chooseservice($slug = FALSE)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('subserfun');
        return $this->findAll();
        
    }
    
}