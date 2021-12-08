<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use \CodeIgniter\View\Table;


class Datatable extends Controller
{
    public function index()
    {
        $data = [
            ["Name", "City", "State"],
            ["Kano", "Nataho", "Wyoming"],
            ["Kung lao", "New York", "New York"],
            ["Sonya", "Omaha", "Nebraska"],
        ];
        // $data = $db->query("select * from table)

        $template = [
            'table_open' => '<table border="1" cellpadding="10" cellspacing="10" class="table">',

            'thead_open' => '<thead>',
            'thead_close' => '</thead>',

            'heading_row_start' => '<tr>',
            'heading_row_end' => '</tr>',
            'heading_cell_start' => '<th>',
            'heading_cell_end' => '</th>',

            'tfoot_open' => '<tfoot>',
            'tfoot_close' => '</tfoot>',

            'footing_row_start' => '<tr>',
            'footing_row_end' => '</tr>',
            'footing_cell_start' => '<td>',
            'footing_cell_end' => '</td>',

            'tbody_open' => '<tbody>',
            'tbody_close' => '</tbody>',

            'row_start' => '<tr>',
            'row_end' => '</tr>',
            'cell_start' => '<td>',
            'cell_end' => '</td>',

            'row_alt_start' => '<tr>',
            'row_alt_end' => '</tr>',
            'cell_atl_start' => '<td>',
            'cell_atl_end' => '</td>',

            'table_close' => '</table>'
        ];

        $table = new Table();

        // $table->setHeading(["Name", "City", "State"]);
        // $table->addRow(["Kano", "Nataho", "Wyoming"]);
        // $table->addRow(["Sonya", "Omaha", "Nebraska"]);
        // $records["users"] = $table->generate();

        $table->setTemplate($template);
        $records["users"] = $table->generate($data);
        echo view("datatable", $records);
    }
}
