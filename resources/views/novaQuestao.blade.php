<form action="{{route('questoes.store')}}" method="POST">
    @csrf
    <input type="hidden" name="idQuestao" id="idQuestao" value="{{old('id')}}">

    <div class="form-group">
        <label for="enunciado">Enunciado</label>
        <textarea name="enunciado" id="enunciado" cols="30" rows="3" value="{{old('enunciado')}}"></textarea>
    </div>
    <div class="form-group">
        <label for="respostaA">Letra A</label>
        <textarea name="respostaA" id="respostaA" cols="30" rows="1" value="{{old('respostaA')}}"></textarea>
    </div>
    <div class="form-group">
        <label for="respostaB">Letra B</label>
        <textarea name="respostaB" id="respostaB" cols="30" rows="1" value="{{old('respostaB')}}"></textarea>
    </div>
    <div class="form-group">
        <label for="respostaC">Letra C</label>
        <textarea name="respostaC" id="respostaC" cols="30" rows="1" value="{{old('respostaC')}}"></textarea>
    </div>
    <div class="form-group">
        <label for="respostaD">Letra D</label>
        <textarea name="respostaD" id="respostaD" cols="30" rows="1" value="{{old('respostaD')}}"></textarea>
    </div>
    <div class="form-group">
        <label for="respostaE">Letra E</label>
        <textarea name="respostaE" id="respostaE" cols="30" rows="1" value="{{old('respostaE')}}"></textarea>
    </div>

    <div class="form-row">
        
        <div class="form-group col-md-6">
            <label for="respostaCorreta">Resposta Correta</label>
            <select name="respostaCorreta" id="respostaCorreta">
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>E</option>
            </select>
        </div>
        
        <div class="form-group col-md-6">
            <label for="valorDaQuestao">Valor da Questão</label>
            <input type="number" class="form-control" min="0" name="valorDaquestao" id="valorDaQuestao" value="{{old.valorDaQuestao}}"/>
        </div>
    </div>

    <input class="btn btn-primary" type="submit" name="SalvarQuestao" id="SalvarQuestao" value="Salvar"/>
    
</form>

<table class="table table-striped table-hover table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Resposta Correta</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>