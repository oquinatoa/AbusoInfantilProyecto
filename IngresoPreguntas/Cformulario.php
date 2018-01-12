<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cformulario
 *
 * @author Usuario
 */
class Cformulario {
    private $Nombre;
    private $listaPreguntas=array();
    public function __construct($nombre) {
        $this->Nombre=$nombre;
    }
    function setListaPreguntas($Pregunta){
        
        array_push($this->listaPreguntas, $Pregunta);
    }
    function getListapreguntas(){
        return $this->listaPreguntas;
    }
    function getNombre(){
        return $this->Nombre;
    }
    
    
}
