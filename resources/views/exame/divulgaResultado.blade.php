@extends('layout.template')
@section('content')
<div>
    <br><br><h4 style="text-align: center;">{{ $mensagem }} </h4><br><br>
    <a href="{{ route ('teste.index') }}" class="btn btn-outline-primary btn-lg btn-block">Voltar para o início</a>
</div>
@endsection