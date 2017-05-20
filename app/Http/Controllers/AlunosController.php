<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use Illuminate\Support\Facades\Response;

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
        $alunos = $aluno->all();
//        $alunos = $aluno->paginate(50);
        
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
        return view('pages.alunos.index', compact('title', 'teste', 'alunos'));
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
        /*
         * AJAX
         */
        
//        if($request->ajax()){
//            
//            $aluno = new Aluno();
//            $aluno->create($request->all());
//            
//            return response(['msg' => 'success']);
//        }
        
        /*
         * AJAX
         */
        
        $params = $request->all();
        
        $params['DT_NASCIMENTO_ALU'] = date('Y-m-d', strtotime($params['DT_NASCIMENTO_ALU']));
        
        $aluno = new Aluno();
        $result = $aluno->create($params);
        
        return response()->json(['response' => 'success'], 200);
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
        $request = new Request();
        $aluno = new Aluno();
        $aluno = $aluno->find($id);
        
        if($request->ajax()){
            
            $response = [
                'ID_ALUNO_ALU' => $aluno->ID_ALUNO_ALU, 
                'NM_NIS_ALU' => $aluno->NM_NIS_ALU, 
                'ST_NOME_ALU' => $aluno->ST_NOME_ALU,
                'ST_RESPONSAVEL_ALU' => $aluno->ST_RESPONSAVEL_ALU,
                'DT_NASCIMENTO_ALU' => $aluno->DT_NASCIMENTO_ALU,
                'ST_ENDERECO_ALU' => $aluno->ST_ENDERECO_ALU,
                'NM_ENDERECO_ALU' => $aluno->NM_ENDERECO_ALU,
                'ST_BAIRRO_ALU' => $aluno->ST_BAIRRO_ALU,
                'NM_TELEFONE_ALU' => $aluno->NM_TELEFONE_ALU,
                'FL_STATUS_ALU' => $aluno->FL_STATUS_ALU,
                'FL_IMAGEM_ALU' => $aluno->FL_IMAGEM_ALU,
                'FL_SAIDA_ALU' => $aluno->FL_SAIDA_ALU,
                'FL_IRMAO_ALU' => $aluno->FL_IRMAO_ALU
            ];
            
            return Response::json($response);            
        }
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
            return redirect()->back();
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
