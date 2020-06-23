<form action="{{route('questao.store', ['questao' => $questao->id])}}" method="POST">
    @csrf
    @method("PUT")
    <input type="hidden" name="idQuestao" id="idQuestao" value="{{$questao->id}}">

    <div class="form-group">
        <label for="enunciado">Enunciado</label>
        <textarea name="enunciado" id="enunciado" cols="30" rows="3">{{$questao->ennunciado}}</textarea>
    </div>
    <div class="form-group">
        <label for="respostaA">Letra A</label>
        <textarea name="respostaA" id="respostaA" cols="30" rows="1" value="{{$questao->respostaA}}"></textarea>
    </div>
    <div class="form-group">
        <label for="respostaB">Letra B</label>
        <textarea name="respostaB" id="respostaB" cols="30" rows="1" value="{{$questao->respostaB}}"></textarea>
    </div>
    <div class="form-group">
        <label for="respostaC">Letra C</label>
        <textarea name="respostaC" id="respostaC" cols="30" rows="1" value="{{$questao->respostaC}}"></textarea>
    </div>
    <div class="form-group">
        <label for="respostaD">Letra D</label>
        <textarea name="respostaD" id="respostaD" cols="30" rows="1" value="{{$questao->respostaD}}"></textarea>
    </div>
    <div class="form-group">
        <label for="respostaE">Letra E</label>
        <textarea name="respostaE" id="respostaE" cols="30" rows="1" value="{{$questao->respostaE}}"></textarea>
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
            <input type="number" class="form-control" min="0" name="valorDaquestao" id="valorDaQuestao" value="{{$questao->valorDaQuestao}}"/>
        </div>
    </div>

    <input class="btn btn-primary" type="submit" name="SalvarQuestao" id="SalvarQuestao" value="Salvar"/>
</form>

<form action="{{route('questao.store', ['questao' => $questao->id])}}" method="post">
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="deletarTeste" id="delete" value="Apagar Teste" />
    </div>
</form>