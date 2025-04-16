<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{
    //
    public function inicio(){
        return view('auth/login');
    }

    public function registro(){
        return view('registro');
    }
    public function mi_cuenta(){
        return view('mi_cuenta');
    }
}
