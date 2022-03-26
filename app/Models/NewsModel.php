<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';

public function getNews($slug = false)
{
    
    if ($slug === false) {
        $db     = \Config\Database::connect('test');
        $builder = $db->table('news');
        return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
}
}