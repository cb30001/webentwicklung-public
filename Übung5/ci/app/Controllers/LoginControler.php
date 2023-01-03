<?php
namespace App\Controllers;

class LoginControler extends BaseController
{
    public function index()
    {
        return view('Login/Login.php');
    }
}