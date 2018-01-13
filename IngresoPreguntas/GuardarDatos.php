<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './Cformulario.php';
session_start();
$objeto = $_SESSION["objeto"];
if ($objeto == null) {
    echo 'nulo';
} else {
    echo 'correcto<br>';
    echo $objeto->getNombre() . '<br>';
    for ($i = 0; $i < sizeof($objeto->getListapreguntas()); $i++) {
        echo $objeto->getListapreguntas()[$i] . '==========<br>';
        for ($j = 0; $j < sizeof($objeto->getListapreguntas()[$i]->getListaRespuestas()); $j++) {
            echo $objeto->getListapreguntas()[$i]->getListaRespuestas()[$j] . '<br>';
        }
    }
}

