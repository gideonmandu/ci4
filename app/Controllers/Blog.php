<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Blog extends Controller
{
    public function index()
    /**Loads index page view */
    {
        echo view("header");
        echo view("myview");
        echo view("footer");
    }
}
