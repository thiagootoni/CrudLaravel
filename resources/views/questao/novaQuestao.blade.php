@extends('layout.template')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Questões do teste <a class="btn btn-outline-danger btn-sm" href="#novaQuestao">Nova questão</a></h3>
    </div>
    
    <div class="card-body">
        <table class="table table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">Enunciado</th>
                    <th scope="col">Resposta Correta</th>
                    <th scope="col">Valor da questão</th>
                    <th scope="col" colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
            @forelse($questoes as $questao)
                <tr>
                    <td>{{$questao->enunciado}}</td>
                    <td>{{$questao->respostaCorreta}}</td>
                    <td>{{$questao->valorDaQuestao}}</td>
                    <td>
                        <a class="btn btn-outline-danger btn-sm" href="{{route('questao.edit', ['questao' => $questao->id,'teste' => $questao->teste_id])}}">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('questao.destroy', ['questao' => $questao->id,'teste' => $questao->teste_id])}}" method="post">
                            <div class="form-group">
                                <input class="btn btn-outline-danger btn-sm" type="submit" name="deletarQuestao" id="delete" value="Apagar Questão" />
                            </div>
                        </form>
                    </td>                    
                </tr>
            @empty
                <tr>
                    <td><td colspan="3">Nenhum registro encontrado</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
<br/>
<div class="card" id="novaQuestao">

    <div class="card-header" >
        <h3>Nova Questão</h3>
    </div>

    <div class="card-body">
        
        <form action="{{route('questao.store', ['teste' => $teste->id])}}" method="POST">
            @csrf           

            <div class="form-group">
                <label for="enunciado">Enunciado</label>
                <textarea name="enunciado" id="enunciado" class="form-control" cols="30" rows="3">{{old('enunciado')}}</textarea>
            </div>
            <div class="form-group">
                <label for="respostaA">Letra A</label>
                <textarea name="respostaA" id="respostaA" class="form-control" cols="30" rows="1">{{old('respostaA')}}</textarea>
            </div>
            <div class="form-group">
                <label for="respostaB">Letra B</label>
                <textarea name="respostaB" id="respostaB" class="form-control" cols="30" rows="1">{{old('respostaB')}}</textarea>
            </div>
            <div class="form-group">
                <label for="respostaC">Letra C</label>
                <textarea name="respostaC" id="respostaC" class="form-control" cols="30" rows="1">{{old('respostaC')}}</textarea>
            </div>
            <div class="form-group">
                <label for="respostaD">Letra D</label>
                <textarea name="respostaD" id="respostaD" class="form-control" cols="30" rows="1">{{old('respostaD')}}</textarea>
            </div>
            <div class="form-group">
                <label for="respostaE">Letra E</label>
                <textarea name="respostaE" id="respostaE" class="form-control" cols="30" rows="1">{{old('respostaE')}}</textarea>
            </div>

            <div class="form-row">
                
                <div class="form-group col-md-6">
                    <label for="respostaCorreta">Resposta Correta</label>
                    <select name="respostaCorreta" id="respostaCorreta" class="form-control">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                    </select>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="valorDaQuestao">Valor da Questão</label>
                    <input type="number" class="form-control" min="0" name="valorDaQuestao" id="valorDaQuestao" value="{{old('valorDaQuestao')}}"/>
                </div>

                <input class="btn btn-primary form-control col-bg" type="submit" name="SalvarQuestao" id="SalvarQuestao" value="Salvar"/>
            </div>
        </form>
    </div>
</div>
<br/>    
@endsection