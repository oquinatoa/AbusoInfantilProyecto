<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControladorIngresoPreguntas
 *
 * @author Usuario
 */
include './Cformulario.php';
include './Cpreguntas.php';

$nformulario = $_POST['no'];
$numPreguntas = $_POST['npreguntas'];
$numRespuestas = $_POST['nrespuestas'];

$formulario = new Cformulario($nformulario);
echo '<br>'.$formulario->getNombre();
echo '<br>'.$numPreguntas;
echo '<br>'.$numRespuestas;
for ($i = 1; $i <= $numPreguntas; $i++) {
    $preguntas = new Cpreguntas();
    $preguntas->setPregunta($_POST['pregunta' . $i]);
    
    for ($j = 1; $j <= $numRespuestas; $j++) {
        $va=($i*10)+$j;
        $preguntas->setRespuesta($_POST['res'.$va]);
        
        $preguntas->setRespuestaValor($_POST['valor'.$va]);
    }
    $formulario->setListaPreguntas($preguntas);
}
for ($j = 0; $j <$numPreguntas; $j++) {
    $pregunas=$formulario->getListapreguntas()[$j];
    echo $pregunas->getPregunta().'<br>';
    for($i=0;$i<sizeof($pregunas->getListaRespuestas());$i++){
        echo $pregunas->getListaRespuestas()[$i].'------'.$pregunas->getlistaRespuestasValores()[$i].'<br>';
    }
}

