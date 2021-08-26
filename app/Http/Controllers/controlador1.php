<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador1 extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function index2(Request $request){
        return view('newVistas',['nombre'=>$request->query('nombre','valor por defecto')]);
    }
}
