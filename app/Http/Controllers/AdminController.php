<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()   {

       $data = [];
       return view('admin/index')->with($data);
    }

    public function add_master()
    {
        $data = [];
        return view('admin/add_master')->with($data);
    }
}
