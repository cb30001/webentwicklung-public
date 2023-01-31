<?php

namespace App\Controllers;

use App\Models\MitgliederModel;

class MitgliederController extends BaseController
{
    public function index(){


        $data['Mitglieder']= array(
            "Max Mustermann",
            "Petra Müller"
        );
        $data['Mitglieder'] = MitgliederModel->getData();
        //this->load-> view('Mitglieder/MitgliederController.php', $data);
        echo view('templates/head_header.php');
        echo view('Mitglieder/MitgliederController.php', $data['Mitglieder']);
        echo view('templates/body_footer.php');
    }
}
