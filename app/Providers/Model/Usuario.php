<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Providers\Model;

/**
 * Description of Usuario
 *
 * @author thiago
 */
class Usuario {
    //put your code here
    
    private $nome;
    private $matricula;
    private $senha;
    private $adm;
    private $exames = array();
    private $testes = array();
    
    function __construct() {
        
    }
    
    function getNome() {
        return $this->nome;
    }

    function getMatricula() {
        return $this->matricula;
    }

    function getSenha() {
        return $this->senha;
    }

    function getAdm() {
        return $this->adm;
    }

    function getExames() {
        return $this->exames;
    }

    function getTestes() {
        return $this->testes;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

    function setSenha($senha): void {
        $this->senha = $senha;
    }

    function setAdm($adm): void {
        $this->adm = $adm;
    }

    function setExames($exames): void {
        $this->exames = $exames;
    }

    function setTestes($testes): void {
        $this->testes = $testes;
    }    
    
}
