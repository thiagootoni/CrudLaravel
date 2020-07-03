<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teste;
use App\Questao;

class TesteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Buscas:
        //Teste::all();        
        //Teste::find();
        //Teste::findOrFail();
        //Teste::paginate(10);
        //dd(Teste::paginate(15));
        $id_user = auth()->user()->id;
        return view('welcome')->withTestes(Teste::where('user_criador_id','!=',$id_user)->paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_user = auth()->user()->id;
        $testes = Teste::where('user_criador_id', '=', $id_user)->paginate(10);
        //dd($testes);
        return view('teste.novoTeste')->withTestes($testes);
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
        
        
        if (empty($request->nome) || empty($request->pontuacaoMinima)) {
            return back()->withInput()->withMensagem("Campos faltantes!"); 
        }

        try {
            $data['user_criador_id'] = auth()->user()->id;
            //dd($data);
            Teste::create($data);
            
        } catch (\Exception $e) {
           
            return back()->withMensagem("Falha ao salvar teste!");
        }
        
        return back()->withMensagem("Teste salvo com sucesso!");
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
    public function edit(Teste $teste)
    {
        //        
        try {
            $teste = Teste::findOrFail($teste->id);
        } catch (\Throwable $th) {
            return view('teste.editTeste')->withMensagem('Teste não econtrado');
        }

        return view('teste.editTeste')->withTeste($teste);
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
        try {
            $teste = Teste::findOrFail($id);
            $teste->update($data);
        } catch (\Throwable $th) {
            return back()->withMensagem("Falha ao atualizar teste!");
        }
        
        return back()->withMensagem("Teste atualizado com sucesso!");        
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
        try {
            Teste::findOrFail($id)->delete();
        } catch (\Throwable $th) {
            return back()->withMensagem("Falha ao remover teste!");
        }
        return back()->withMensagem("Teste removido com sucesso!");
    }
}
