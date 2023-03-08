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
    public function show($curso){ //Indico con un arreglo el nombre de la variable y tomo el valor de la variable $curso
        return view('cursos.show', compact('curso'));
    }
}
