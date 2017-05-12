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
        
        $totalAlunos = count($alunos);
        
//        $request = new Request();
//        if($request->only('pesquisa')){
//            dd($request);
//        }
        
        foreach($alunos as $row){
            $idade = $this->calcularIdade($row->DT_NASCIMENTO_ALU);
            $row->IDADE = $idade;
        }

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
//            return 'Sucesso';
            return redirect()->back();
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
        $aluno = new Aluno();
        $params = $request->all();
        
        $params['DT_NASCIMENTO_ALU'] = date('Y-m-d', strtotime($params['DT_NASCIMENTO_ALU']));

        $result = $aluno->find($id)->update($params);
        
        if($result)
            return 'Sucesso';
        else
            return 'Falha';
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

        $result = $aluno->find($id)->delete();
        
        if($result){
            return response(['success' => true]);
        }
        
//        if(request()->expectsJson())
//            return $result->toJson();
        
//        if($result)
//            return response()->json(['success', true]);
//        else
//            return response()->json(['error', true]);
    }
    
    private function calcularIdade($dataNasc)
    {
        $dataNasc = date('d/m/Y', strtotime($dataNasc));
        $dataNasc = explode('/',$dataNasc);
        $data = date('d/m/Y');
        $data = explode('/',$data);
        $anos = $data[2] - $dataNasc[2];

        if($dataNasc[1] > $data[1])
            return $anos - 1;

        if($dataNasc[1] == $data[1]){
            if($dataNasc[0] <= $data[0])
                return $anos;
            else
                return $anos - 1;
        }

        if ($dataNasc[1] < $data[1])
            return $anos;
    }
}
