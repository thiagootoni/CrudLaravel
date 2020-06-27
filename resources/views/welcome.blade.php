@extends('layout.template')
@section('content')
<div class="card" style="margin-top: 30px;">

    <div class="card-header">
        <h3>Testes disponíveis</h3>
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
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class="btn btn-outline-danger btn-sm" href="#">Realizar</a>
                    </td>
                </tr>
            </tbody>
        </table>            
    </div>

</div>
@endsection