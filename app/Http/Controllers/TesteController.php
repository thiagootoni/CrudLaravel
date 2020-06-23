<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Teste;

class TesteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('novoTeste');
        //Buscas:
        //Teste::all();
        Teste::paginate(10);
        //Teste::find();
        //Teste::findOrFail();
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
        //
        $data = $request->all();

        
        if (empty($request->nome) || empty($request->pontuacaoMinina)) {
            return back()->withInput(); 
        }
        
        $data['user_criador_id'] = 1;
        $Teste::create($data);

        return back()->withMensagem("Cliente salvo com suecesso!");
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
        Teste::findOrFail($id);
        //return?
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
        $teste = Teste::findOrFail($id);
        return view('teste.editTeste')->withPost($post);
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
        //
        $data = $request->all();
        $teste = Teste::findOrFail($id);

        $teste->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Teste::findOrFail($id)->delete();
    }
}
