<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function getMaterialIndex(){
        return view('admin.material.index');
    }

    public function getMaterialCreate(){
        return view('admin.material.create');
    }
}
