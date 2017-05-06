<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Aluno $aluno)
    {
        $title = 'Alunos';
        $teste = 'Alunos';
//        $alunos = $aluno->all();
        $alunos = $aluno->paginate(50);
//        return view('alunos.index', ['teste' => $teste]);
        return view('alunos.index', compact('title', 'teste', 'alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->all();
        
        $params['DT_NASCIMENTO_ALU'] = date('Y-m-d', strtotime($params['DT_NASCIMENTO_ALU']));
        
        $aluno = new Aluno();
        $result = $aluno->create($params);
        
        if($result)
            return 'Sucesso';
        else
            return 'Falha';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "Editando {$id}";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = new Aluno();
//        dd($aluno);
        $result = $aluno->find($id)->delete();
        
        if($result)
            return 'Sucesso';
        else
            return 'Falha';
    }
}
