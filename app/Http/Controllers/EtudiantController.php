<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function inscriptionEtudiant()
    {
       $data=[];

       return view('site/inscriptionEtudiant')->with($data);
    }
}
