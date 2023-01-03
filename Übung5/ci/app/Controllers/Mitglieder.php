<?php

namespace App\Controllers;

class Mitglieder extends BaseController
{
    public function index(){


        $data['Mitglieder']= array(
            "Max Mustermann",
            "Petra Müller"
        );
        //this->load-> view('Mitglieder/Mitglieder.php', $data);
        echo view('Mitglieder/Mitglieder.php', $data);
    }
}
