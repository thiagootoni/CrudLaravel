<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teste;
use App\Questao;

class QuestaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Teste $teste)
    {
        //
        //$questoes = Teste::findOrFail($teste->id)->questoes();
        //return view('novaQuestao')->withQuestoes($questoes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Teste $teste)
    {
        $teste = Teste::findOrFail($teste->id);
        //dd($teste->questoes());
        $questoes = $teste->questoes;
        //dd($questoes);
        return view('questao.novaQuestao')->withQuestoes($questoes)->withTeste($teste);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Teste $teste)
    {
        //
        //dd($request);       

        if (empty($request->enunciado) || empty($request->respostaA) || empty($request->respostaB) || empty($request->respostaC) ||
            empty($request->respostaD) || empty($request->respostaE) || empty($request->respostaCorreta) || empty($request->valorDaQuestao)) {
            
            return back()->withInput()->withMensagem("Campos faltantes!"); 
        }

        $data = $request->all();

        $teste = Teste::findOrFail($teste->id);

        try {
            $teste->questoes()->create($data);
        } catch (\Throwable $th) {
            return back()->withMensagem("Erro ao salvar questão!");
        }

        return back()->withMensagem("Questão sava com sucesso!");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Teste $teste, Questao $questao)
    {
        //
        //dd($questao);
        try {
            $questao = Questao::findOrFail($questao->id);
            
        } catch (\Throwable $th) {
            return view('questao.editQuestao')->withMensagem('Questão não econtrada');
        }

        return view('questao.editQuestao')->withQuestao($questao);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $questao)
    {
        //dd($questao);

        if (empty($request->enunciado) || empty($request->respostaA) || empty($request->respostaB) || empty($request->respostaC) ||
            empty($request->respostaD) || empty($request->respostaE) || empty($request->respostaCorreta) || empty($request->valorDaQuestao)) {
            
            return back()->withInput()->withMensagem("Campos faltantes!"); 
        }

        $data = $request->all();

        $questao = Questao::findOrFail($questao);

        try {
            $questao->update($data);
        } catch (\Throwable $th) {
            return back()->withMensagem("Erro ao salvar questão!");
        }

        return back()->withMensagem("Questão sava com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teste $teste,Questao $questao)
    {
        //
        try {
            $questao = Questao::findOrFail($questao->id)->delete();
        } catch (\Throwable $th) {
            return back()->withMensagem("Falha ao remover questão!");
        }
        return back()->withMensagem("Questão removida com sucesso!");
    }
}
