@extends('layout.template')
@section('content')
<h5 style="text-align: center;">Bem-vindo {{ auth()->user()->name }}!</h5>
<div class="card" style="margin-top: 30px;">

    <div class="card-header">
        <h3>Testes disponíveis para realização</h3>
    </div>

    <div class="card-body">
        <table class="table table-hover table-sm ">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Pontuação mínima</th>
                    <th scope="col">Criador</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <!--forelse-->
                @forelse($testes as $teste)
                <tr>
                    <td>{{$teste->nome}}</td>
                    <td>{{$teste->pontuacaoMinima}}</td>
                    <td>{{$teste->user->name}}</td>
                    <td>
                        <a class="btn btn-outline-danger btn-sm" href="{{ route ('exame.show', ['teste' => $teste->id ]) }}">Realizar</a>
                    </td>
                </tr>
                @empty
                <tr>
                <td colspan="4" style="text-align: center;">Nenhum registro econtrado</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{$testes->links()}}            
    </div>

</div>
@endsection