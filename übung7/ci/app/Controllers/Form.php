<?php

namespace App\Controllers;

use Config\Services;

class Form extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('Login_Codeigniter');
        }

        $rules = [];

        if (! $this->validate($rules)) {
            return view('Login/Login_Codeigniter');
        }

        return view('success');
    }
}