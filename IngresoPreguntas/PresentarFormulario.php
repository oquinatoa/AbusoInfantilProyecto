<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fomulario</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
        include './Cformulario.php';
        include './Cpreguntas.php';

        $nformulario = $_POST['no'];
        $numPreguntas = $_POST['npreguntas'];
        $numRespuestas = $_POST['nrespuestas'];

        $formulario = new Cformulario($nformulario);
        for ($i = 1; $i <= $numPreguntas; $i++) {
            $preguntas = new Cpreguntas();
            $preguntas->setPregunta($_POST['pregunta' . $i]);

            for ($j = 1; $j <= $numRespuestas; $j++) {
                $va = ($i * 10) + $j;
                $preguntas->setRespuesta($_POST['res' . $va]);

                $preguntas->setRespuestaValor($_POST['valor' . $va]);
            }
            $formulario->setListaPreguntas($preguntas);
        }
        ?>
        <div>

        </div>
        <div class="jumbotron text-center">
            <h1>Cuestionario:<?= $_POST['no'] ?></h1>

        </div>
        <div class="container">
            <?php
            for ($j = 0; $j < $numPreguntas; $j++) {
                echo '<div class="form-group">';
                $pregunas = $formulario->getListapreguntas()[$j];
                echo  '<label>'.$pregunas->getPregunta().'</label>';
                echo '<div class="form-control">';
                for ($i = 0; $i < sizeof($pregunas->getListaRespuestas()); $i++) {
                    $num=$i+1;
                    echo '<label>'.$num.'.-'.$pregunas->getListaRespuestas()[$i].'</label><br>'; 
                }
                echo '</div>';
                echo '</div>';
            }
            ?>
            <button class="btn btn-primary active">Guardar</button>
        </div>

    </body>
</html>
