@extends('layout.template')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Editar Questão</h3>
    </div>

    <div class="card-body">
        <form action="{{route('questao.update', ['questao' => $questao->id, 'teste' => $questao->teste_id])}}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="enunciado">Enunciado</label>
                <textarea name="enunciado" id="enunciado" class="form-control" cols="30" rows="3">{{$questao->enunciado}}</textarea>
            </div>
            <div class="form-group">
                <label for="respostaA">Letra A</label>
                <textarea name="respostaA" id="respostaA" class="form-control" cols="30" rows="1" >{{$questao->respostaA}}</textarea>
            </div>
            <div class="form-group">
                <label for="respostaB">Letra B</label>
                <textarea name="respostaB" id="respostaB" class="form-control" cols="30" rows="1" >{{$questao->respostaB}}</textarea>
            </div>
            <div class="form-group">
                <label for="respostaC">Letra C</label>
                <textarea name="respostaC" id="respostaC" class="form-control" cols="30" rows="1" >{{$questao->respostaC}}</textarea>
            </div>
            <div class="form-group">
                <label for="respostaD">Letra D</label>
                <textarea name="respostaD" id="respostaD" class="form-control" cols="30" rows="1" >{{$questao->respostaD}}</textarea>
            </div>
            <div class="form-group">
                <label for="respostaE">Letra E</label>
                <textarea name="respostaE" id="respostaE" class="form-control" cols="30" rows="1" >{{$questao->respostaE}}</textarea>
            </div>

            <div class="form-row">
                
                <div class="form-group col-md-6">
                    <label for="respostaCorreta">Resposta Correta</label>
                    <select name="respostaCorreta" class="form-control" id="respostaCorreta">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                    </select>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="valorDaQuestao">Valor da Questão</label>
                    <input name="valorDaQuestao" type="number" class="form-control" min="0" name="valorDaquestao" id="valorDaQuestao" value="{{$questao->valorDaQuestao}}"/>
                </div>
            </div>

            <input class="btn btn-primary" type="submit" name="SalvarQuestao" id="SalvarQuestao" value="Salvar"/>
            <a href="{{route('questao.edit', ['questao' => $questao->id,'teste' => $questao->teste_id])}}" class="btn btn-outline-primary">Voltar para teste</a>
        </form>
    </div>
</div>
@endsection