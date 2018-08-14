<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getAdmin(){
        return view('admin.index');
    }
    public function addProduct(){
        return view()
    }
}
