<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class karyawanController extends Controller
{
    public function index(){
        return view('karyawan');
    }
}
