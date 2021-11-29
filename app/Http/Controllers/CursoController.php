<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        return view('cursos.show',compact('curso')); //con el metodo compac pasamos un arral de la siguiente manera ['curso'=>$curso]
    }
}
