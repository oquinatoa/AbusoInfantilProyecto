<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cpreguntas
 *
 * @author Usuario
 */
class Cpreguntas {

    private $pregunta;
    private $listaRespuestas = array();
    private $listaRespuestasValores=array();

    public function __construct() {
    }

    function setPregunta($pregunta) {
        $this->pregunta = $pregunta;
    }

    function getPregunta() {
        return $this->pregunta;
    }

    function setRespuesta($respuesta) {
        array_push($this->listaRespuestas, $respuesta);
    }

    function setRespuestaValor($valor) {
        array_push($this->listaRespuestasValores, $valor);
    }

    function getListaRespuestas() {
        return $this->listaRespuestas;
    }

    function getListaRespuestasValores() {
        return $this->listaRespuestasValores;
    }

}
