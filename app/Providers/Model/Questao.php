<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Providers\Model;

/**
 * Description of Questao
 *
 * @author thiago
 */
class Questao {
    //put your code here
    
    private $enunciado;
    private $respostaA;
    private $respostaB;
    private $respostaC;
    private $respostaD;
    private $respostaE;
    private $respostaCorreta;
    private $valorDaQuestao;
    private $teste;
    
    function __construct() {
        
    }

    function getEnunciado() {
        return $this->enunciado;
    }

    function getRespostaA() {
        return $this->respostaA;
    }

    function getRespostaB() {
        return $this->respostaB;
    }

    function getRespostaC() {
        return $this->respostaC;
    }

    function getRespostaD() {
        return $this->respostaD;
    }

    function getRespostaE() {
        return $this->respostaE;
    }

    function getRespostaCorreta() {
        return $this->respostaCorreta;
    }

    function getValorDaQuestao() {
        return $this->valorDaQuestao;
    }

    function setEnunciado($enunciado): void {
        $this->enunciado = $enunciado;
    }

    function setRespostaA($respostaA): void {
        $this->respostaA = $respostaA;
    }

    function setRespostaB($respostaB): void {
        $this->respostaB = $respostaB;
    }

    function setRespostaC($respostaC): void {
        $this->respostaC = $respostaC;
    }

    function setRespostaD($respostaD): void {
        $this->respostaD = $respostaD;
    }

    function setRespostaE($respostaE): void {
        $this->respostaE = $respostaE;
    }

    function setRespostaCorreta($respostaCorreta): void {
        $this->respostaCorreta = $respostaCorreta;
    }

    function setValorDaQuestao($valorDaQuestao): void {
        $this->valorDaQuestao = $valorDaQuestao;
    }

    function getTeste() {
        return $this->teste;
    }

    function setTeste($teste): void {
        $this->teste = $teste;
    }


}
