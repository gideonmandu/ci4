<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class Test extends Controller
{
    public function index()
    {
        $parser = \Config\Services::parser();

        $data = [
            'page_title' => 'My Blog Title',
            'page_heading' => 'My Blog Heading',
            'subjects_list' => [
                ['subject' => 'HTML', 'abbr' => 'Hyper Text Markup Language'],
                ['subject' => 'CSS', 'abbr' => 'Cascading Style Sheets'],
                ['subject' => 'JSON', 'abbr' => 'JavaScript Object Notation'],
                ['subject' => 'AJAX', 'abbr' => 'Asynchronous JavaScript and XML'],
                ['subject' => 'PHP', 'abbr' => 'HyperText PreProcessor'],
            ],
            'status' => true,
        ];

        $parser->setData($data);
        echo $parser->render('header');
        return $parser->render('myview2');
    }
}
