<?php
namespace App\Controllers;

class Aufgabenplaner_Aufgaben_Controler extends BaseController
{
    public function index()
    {
        return view('Aufgabenplaner_Aufgaben/Aufgabenplaner_Aufgaben.php');
    }
}