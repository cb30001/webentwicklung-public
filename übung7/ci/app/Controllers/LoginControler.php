<?php
namespace App\Controllers;


class LoginControler extends BaseController
{

    public function index()
    {
        $data['title'] = 'Login';
        helper(['form']);

        echo view('templates/head_header');
        echo view('Login/Login_Codeigniter');
        echo view('templates/body_footer');

    }
    public function login(){
        $data['title'] = 'Login';
        helper(['form']);
        if ($this->request->getMethod() == post){
            $rules = [
                'username' => 'required',
                'password' => 'required',
                'checkbox' => 'required'
            ];
        }
        if(! $this->validate($rules)){
            $data['validation']=$this->validator;
            return view('failure');
        }else{

        }
        echo view('templates/head_header');
        echo view('Login/Login_Codeigniter');
        echo view('templates/body_footer');
    }
}