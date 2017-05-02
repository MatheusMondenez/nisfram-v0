<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index(){
        $title = 'Alunos';
        $teste = 'Alunos';
//        return view('alunos.index', ['teste' => $teste]);
        return view('alunos.index', compact('title', 'teste'));
    }
}
