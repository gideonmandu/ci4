<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Blog extends Controller
{
    public function index()
    /**Loads index page view */
    {
        $data = [
            "page_title" => "Code Igniter 4",
            "page_heading" => "Code Igniter 4 Views",
            // "subjects" => [],
            "subjects" => ["HTML", "CSS", "BootStrap", "JavaScript", "AJAX", "ReactJS", "PHP", "Postgres", "Python", "CodeIgniter", "fastAPI"],

        ];

        echo view("header", $data);
        echo view("myview", $data);
        echo view("footer");
    }
}
