<?php

namespace App\Http\Controllers;
use App\Models\Professor;

use Illuminate\Http\Request;

class ProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Professores';
        $professor = new Professor();
        $professores = $professor->paginate(50);
        
        return view('pages.professores.index', compact('title', 'professores'));
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
        $professor = new Professor();
        
        $result = $professor->create($params);
        
        if($result)
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
        $professor = new Professor();
        $params = $request->all();

        $result = $professor->find($id)->update($params);
        
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
        $professor = new Professor();

        $result = $professor->find($id)->delete();
        
        if($result)
            return redirect()->back();
        else
            return 'Falha';
    }
}