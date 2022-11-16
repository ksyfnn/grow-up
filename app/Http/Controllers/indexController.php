<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function karyawan(){
        return view('karyawan');
    }

    public function gaji(){
        return view('gaji');
    }

    public function laporan(){
        return view('laporan');
    }

    public function jabatan(){
        return view('jabatan');
    }
    
}
