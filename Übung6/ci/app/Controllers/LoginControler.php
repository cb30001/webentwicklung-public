<?php
namespace App\Controllers;

use App\Models\LoginModel;
use mysql_xdevapi\Session;

class LoginControler extends BaseController
{
    public function index()
    {

        return view('Login/Login_Codeigniter.php');
    }
    public function login(){
        if(isset($_POST['username']) && isset($_POST['password']));
        $data['Mitglieder'] = LoginModel->getData();
        if ($data[0]==$_POST['username'] && $data[1]==$_POST['password']){

            password_hash($_POST['password']);
            password_verify($_POST['password']);
            new Session($_POST[username]);
            redirect(base_url());
        }
    }
    public function logout(){
        session()->destroy();
        return redirect()->to(base_url().'/login');
    }
}