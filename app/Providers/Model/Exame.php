<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Providers\Model;

/**
 * Description of Exame
 *
 * @author thiago
 */
class Exame {
    //put your code here
    private $teste;
    private $usuario;
    private $notaFinal;
    private $foiRelizado = false;
    
    function __construct() {
        
    }

    function getTeste() {
        return $this->teste;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getNotaFinal() {
        return $this->notaFinal;
    }

    function getFoiRelizado() {
        return $this->foiRelizado;
    }

    function setTeste($teste): void {
        $this->teste = $teste;
    }

    function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    function setNotaFinal($notaFinal): void {
        $this->notaFinal = $notaFinal;
    }

    function setFoiRelizado($foiRelizado): void {
        $this->foiRelizado = $foiRelizado;
    }

}
