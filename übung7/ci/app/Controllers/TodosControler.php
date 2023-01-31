<?php
namespace App\Controllers;

class TodosControler extends BaseController
{
    public function index()
    {
        //echo view('templates/head_header.php');
        //$data['Mitglieder'] = MitgliederModel->getData();
        echo view('Todos/Todos.php');
        //echo view('templates/body_footer.php');
    }
}
?>