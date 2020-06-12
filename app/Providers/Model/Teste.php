<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Providers\Model;

/**
 * Description of Teste
 *
 * @author thiago
 */
class Teste {
    //put your code here
    
    private $nome;
    private $pontuacaoMinina;
    private $questoes = array();
    private $exames = array();
    private $criador; //usuario
    
    function __construct() {
        
    }
    
    function getNome() {
        return $this->nome;
    }

    function getPontuacaoMinina() {
        return $this->pontuacaoMinina;
    }

    function getQuestoes() {
        return $this->questoes;
    }

    function getExames() {
        return $this->exames;
    }

    function getCriador() {
        return $this->criador;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setPontuacaoMinina($pontuacaoMinina): void {
        $this->pontuacaoMinina = $pontuacaoMinina;
    }

    function setQuestoes($questoes): void {
        $this->questoes = $questoes;
    }

    function setExames($exames): void {
        $this->exames = $exames;
    }

    function setCriador($criador): void {
        $this->criador = $criador;
    }

}
