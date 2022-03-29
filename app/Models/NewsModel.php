<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $allowedFields = ['title', 'slug', 'body'];

    public function getNews($slug = false)
    {
        
        if ($slug === false) {
            $db     = \Config\Database::connect('test');
            $builder = $db->table('news');
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    public function something($slug = false){
        echo 'enters function';
        echo print_r($slug);
    }
}
