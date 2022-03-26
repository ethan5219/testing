<?php

namespace App\Controllers;

use App\Models\Service_line;
use App\Models\Company_by_serviceline;
use App\Models\Choose_serviceline;

class Temp extends BaseController {
    
    public function index()
    {
        
        echo view('Home/temp');
    
    
    }
}