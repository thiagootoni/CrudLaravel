<form action="{{route(testes.store)}}" method="POST">
    @csrf
    <input type="hidden" name="idTeste" value="{{old('id'}}" />

    <div class="form-group">
        <label for="nome">Nome do Teste</label>
        <input type="text" name="nome" id="nome" value="{{old('nome')}}" />
    </div>
    <div class="form-group">
        <label for="pontuacaoMinima">Pontuação mínima</label>
        <input type="text" name="pontuacaoMinima" id="pontuacaoMinima" value="{{old('pontuacaoMinima')}}" />
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="number" name="criarProva" id="criarProva" value="Criar" />
    </div>
</form>

<table class="table table-striped table-hover table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>