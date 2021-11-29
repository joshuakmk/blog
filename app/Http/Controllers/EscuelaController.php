<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EscuelaController extends Controller
{
    public function index(){
        return view('escuelas.index');
    }

    public function create()
    {
        return view('escuelas.create');
    }
    public function show($escuela){
        return view('escuelas.show',compact('escuela'));
    }
}
