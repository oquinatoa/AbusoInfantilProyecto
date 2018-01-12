<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ingreso de preguntas</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    </head>
    <body>
        <div>

        </div>
        <div class="jumbotron text-center">
            <h1>Ingreso datos del formulario</h1>

        </div>
        <div class="container">

            <form action="InsertarPreguntas.php" method="POST" name="formulario1">
                <div class="form-group">
                    <label for="nformulario">Nombre del formulario:</label>
                    <input type="text" class="form-control" id="nformulario" name="nformulario">
                </div>
                <div class="form-group">
                    <label for="npreguntas">Numero de preguntas:</label>
                    <input type="text" class="form-control" id="npreguntas" name="npreguntas">
                </div> 
                <div class="form-group">
                    <label for="nrespuestas">Numero de respuestas por pregunta:</label>
                    <input type="text" class="form-control" id="nrespuestas" name="nrespuestas">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary active" value="Siguiente"/>
                </div>
            </form>


        </div>
    </body>
    <script>
        function enviar_formulario() {
            document.formulario1.submit()
        }
    </script> 
</html>
