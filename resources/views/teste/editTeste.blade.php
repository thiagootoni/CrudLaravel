@extends('layout.template')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Editar Teste</h3>
    </div>

    <div class="card-body">
        <form action="{{route('teste.update', ['teste' => $teste->id] )}}" method="POST">        
            @csrf
            @method('PUT')
            <div class="form form-row">
                
                <input type="hidden" name="idTeste" value="{{$teste->id}}" />

                <div class="form-group col-md-5">
                    <label for="nome">Nome do Teste</label>
                    <input type="text" name="nome" class="form-control" value="{{$teste->nome}}" />
                </div>
                <div class="form-group col-md-5">
                    <label for="pontuacaoMinima">Pontuação mínima</label>
                    <input type="text" name="pontuacaoMinima" class="form-control" value="{{$teste->pontuacaoMinima}}" />
                </div>
                <div class="form-group col-md-2">
                    <input class="btn btn-primary form-control align-bottom" type="submit" name="AlterarTeste" value="Alterar" />
                </div>    
            </div>    
        </form>
    </div>
</div>
@endsection