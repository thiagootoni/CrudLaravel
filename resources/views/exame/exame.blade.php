@extends('layout.template')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>{{ $teste->nome }}</h3>
        <small>Pontuação Mínima: {{ $teste->pontuacaoMinima }} | {{ $teste->questoes()->count() }} questões </small>
    </div>

    <div class="card-body">
        </br><h6>Responda</h6>
        </hr>
        <form action="{{ route ('exame.store', ['teste' => $teste->id]) }}" method="post">
            @csrf
            @forelse($teste->questoes as $key => $questao)
            <div class="card-body form-group">
                <p> Questão {{ $key + 1}} </p><hr>
                <label for="enunciado">Enunciado</label>
                <textarea name="enunciado" id="enunciado" class="form-control" cols="30" rows="3" readonly>{{ $questao->enunciado }}</textarea>
                <label>Resposta</label>
                <select name="resposta[]" id="resposta" class="form-control">
                    <option value="A">{{ $questao->respostaA }}</option>
                    <option value="B">{{ $questao->respostaB }}</option>
                    <option value="C">{{ $questao->respostaC }}</option>
                    <option value="D">{{ $questao->respostaD }}</option>
                    <option value="E">{{ $questao->respostaE }}</option>
                </select>
            </div>

            @empty
            <div class="form-group">
                <h4 style="text-align: center;">Não há questões para serem respondidas </h4>
            </div></br>      
            @endforelse


            @if($teste->questoes()->count() > 0)
            <div class="form-group">
                <input class="btn btn-primary form-control col-bg" type="submit" name="SalvarQuestao" id="SalvarQuestao" value="Salvar"/>
            </div>
            @endif
        </form>
    </div>
</div>
@endsection