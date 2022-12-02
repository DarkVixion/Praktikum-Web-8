<?php

namespace App\Controllers;

class Utama extends BaseController
{
    public function Dashboard()
    {
        return view('Main/Dashboard');
    }
    public function Device()
    {
        


        
        return view('Main/Device');
    }
}