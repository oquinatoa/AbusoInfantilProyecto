<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ingresar preguntas</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
        session_start();
        $nombreformulario = $_POST['nformulario'];
        $numPreguntas = $_POST['npreguntas'];
        $numRespuestas = $_POST['nrespuestas'];
        ?>

        <div>

        </div>
        <div class="jumbotron text-center">
            <h1>Ingreso datos del formulario</h1>
            <h2>Nombre del formulario: <?= $nombreformulario ?></h2>

        </div>

        <form action="PresentarFormulario.php" method="POST">

            <input type="hidden" value="<?= $numPreguntas ?>" name="npreguntas"/>
            <input type="hidden" value="<?= $numRespuestas ?>" name="nrespuestas"/>
            <input type="hidden" value="<?= $_POST['nformulario'] ?>" name="no"/>

            <div class="container">
                <?php
                for ($i = 1; $i <= $numPreguntas; $i++) {
                    echo '<div class="form-group">';
                    echo '<label>Pregunta ' . $i . ':</label>';
                    echo '<input type="text" class="form-control" id="pregunta' . $i . '" name="pregunta' . $i . '">';

                    echo '<div class="form-control">
                    <table class="table">
                        <tbody>';
                    for ($j = 1; $j <= $numRespuestas; $j++) {
                        $va = ($i * 10) + $j;
                        echo '<tr>';
                        echo '<td>
                                    <div class="form-group">
                                    <label>Repuesta ' . $j . ':</label> ';
                        echo '<input type="text" class="form-control" id="res' . $va . '" name="res' . $va . '">';

                        echo '</div>
                                </td>';
                        echo '<td>
                                    <div class="form-group">
                                    <label>Valor</label>
                                    <select class="form-control" id="valor' . $j . '" name="valor' . $va . '">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>';

                        echo '</div>
                                </td>';
                        echo '</tr>';
                    }

                    echo ' </tbody>
                    </table>
                </div>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="form-group">
                <center>
                    <input type="submit"  class="btn btn-primary active" value="Siguiente"/>
                </center>
            </div>


        </form>

    </body>
</html>
