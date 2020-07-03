<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teste;
use App\Questao;
use App\Exame;

class ExameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
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
    public function store(Request $request, Teste $teste)
    {
        //
        //dd($request->all());
        $data = $request->all();

        $respostas = $data['resposta'];
        //dd($respostas);
        $teste = Teste::find($teste->id);
        $gabarito = array();
        $pontuacoes = array();
        $pontuacaoFinal = 0;
        
        foreach ($teste->questoes as $questao) {
            array_push($gabarito, $questao->respostaCorreta);
            array_push($pontuacoes, $questao->valorDaQuestao);
        }

        //dd($gabarito);
        //dd($pontuacoes);

        foreach ($respostas as $key => $resposta) {
            if ($resposta == $gabarito[$key]) {
                $pontuacaoFinal += $pontuacoes[$key];
            }
        }

        //dd($pontuacaoFinal);

        $exame = new Exame();
        $mensagem = "";

        $exame->teste_id = $teste->id;
        $exame->user_resposta_id = auth()->user()->id;
        $exame->notaFinal = $pontuacaoFinal;       
        
        if ($exame->notaFinal >= $teste->pontuacaoMinima) {
            $exame->foiAprovado = true;
            $mensagem = "Parabéns vc foi aprovado! Nota: ".$exame->notaFinal."!";
        }else{
            $exame->foiAprovado = false;
            $mensagem = "Reprovado, tente novamente! Nota: ".$exame->notaFinal."!";
        }
        
        $exame->foiRealizado = true;

        //Exame::create($exame);
        $exame->save();

        return view('exame.divulgaResultado')->withMensagem($mensagem);
        
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
        try {
            //code...
            $teste = Teste::findOrFail($id);
            
        } catch (\Throwable $th) {
            //throw $th;
            return back()->withMensagem('Teste não econtrado');
        }
        //dd($questoes);
        return view('exame.exame')->withTeste($teste);//->withQuestoes($questoes);
        
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
        //
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
    }
}
