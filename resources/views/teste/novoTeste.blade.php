@extends('layout.template')
@section('content')

<div class="card">

    <div class="card-header">
        <h3>
            Novo Teste
        </h3>
    </div>
    
    <div class="card-body">
        <form action="{{route('teste.store')}}" method="POST">
        @csrf
            <div class="form form-row">
                
                <input type="hidden" name="idTeste" value="{{old('id')}}" />

                <div class="form-group col-md-5">
                    <label for="nome">Nome do Teste</label>
                    <input type="text" name="nome" class="form-control" value="{{old('nome')}}" />
                </div>
                <div class="form-group col-md-5">
                    <label for="pontuacaoMinima">Pontuação mínima</label>
                    <input type="text" name="pontuacaoMinima" class="form-control" value="{{old('pontuacaoMinima')}}" />
                </div>
                <div class="form-group col-md-2">
                    <label style="color:white;">botao</label>
                    <input class="btn btn-primary form-control" type="submit" name="criarProva" value="Criar" />
                </div>    
            </div>    
        </form>
    </div>
</div>
<br/>
<div class="card">
    
    <div class="card-header">
        <h3>
            Meus testes
        </h3>        
    </div>

    <div class="card-body">
        <table class="table table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Pontuação Mínima</th>
                    <th scope="col" colspan="3">Ações</th>
                </tr>
            </thead>
            <tbody>
            @forelse($testes as $teste)
                <tr>
                    <td>{{$teste->id}}</td>
                    <td>{{$teste->nome}}</td>
                    <td>{{$teste->pontuacaoMinima}}</td>                    
                    <td>
                        <a class="btn btn-outline-danger btn-sm" href="{{route('teste.edit', ['teste' => $teste->id])}}">Editar</a>        
                    </td>
                    <td>
                        <form action="{{route('teste.destroy', ['teste' => $teste->id])}}" method="Post">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-outline-danger btn-sm" type="submit" id="deletar" value="deletar"/>
                        </form> 
                    </td>
                    <td>
                        <a class="btn btn-outline-danger btn-sm" href="{{route('questao.create', ['teste' => $teste->id])}}">Gerenciar Questões</a> 
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">Nenhum registro econtrado</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection