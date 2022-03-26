<?php

namespace App\Controllers;


class Admin extends BaseController {
    
    public function sitemap()
    {
        
        echo view('admin/sitemap.txt');
        
    }
}