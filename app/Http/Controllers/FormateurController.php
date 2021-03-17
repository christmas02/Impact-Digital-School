<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormateurController extends Controller
{
    public function inscriptionFormateur()
    {
       $data=[];

       return view('site/inscriptionFormateur')->with($data);
    }
}
