<?php

namespace App\Controllers;

use App\Models\MitgliederModel;

class Mitglieder extends BaseController
{
    public function index(){


//        $data['Mitglieder']= array(
//            "Max Mustermann",
//            "Petra Müller"
//        );
        $data['Mitglieder'] = MitgliederModel->getData();
        //this->load-> view('Mitglieder/Mitglieder.php', $data);
        echo view('Mitglieder/Mitglieder.php', $data);
    }
}
