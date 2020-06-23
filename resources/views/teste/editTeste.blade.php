<form action="{{route('teste.update', ['teste' => $teste->id])}}" method="POST">
    
    @csrf
    @method("PUT")
    <input type="hidden" name="idTeste" value="{{$teste->id}}" />

    <div class="form-group">
        <label for="nome">Nome do Teste</label>
        <input type="text" name="nome" id="nome" value="{{$teste->nome)}}" />
    </div>
    <div class="form-group">
        <label for="pontuacaoMinima">Pontuação mínima</label>
        <input type="text" name="pontuacaoMinima" id="pontuacaoMinima" value="{{$teste->pontuacaoMinima)}}" />
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="salvarProva" id="salvr" value="Salvar Teste" />
    </div>
</form>

<form action="{{route('teste.delete', ['teste' => $teste->id])}}" method="post">
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="deletarTeste" id="delete" value="Apagar Teste" />
    </div>
</form>