<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class Viewparser extends Controller
{
    public $parser;

    public function __construct()
    /**instantiated parser in the class making it reusable */
    {
        $this->parser = \Config\Services::parser();
    }

    public function index()
    {
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

        $this->parser->setData($data);
        echo $this->parser->render('header');
        return $this->parser->render('viewparser');
    }

    public function filters()
    {


        $data = [
            'page_title' => 'My Filtered Data',
            'page_heading' => 'Data Filtering',
            'date' => '07-12-2021',
            'price' => 100.50,
            'price_rounded' => 100.69,
            'status' => true,
        ];

        return $this->parser->setData($data)->render('filterview');
    }
}
