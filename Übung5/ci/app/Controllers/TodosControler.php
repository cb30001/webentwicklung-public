<?php
namespace App\Controllers;

class TodosControler extends BaseController
{
    public function index()
    {
        echo view('Todos/Todos.php');
    }
}