<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './CconexionBase.php';
        $con = new CconexionBase();
        $conexion = $con->conexion();
        $query = 'select * from t_persona;';
        $resultado = mysqli_query($conexion, $query);
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo $fila['TE_NOMBRES'].'<br>';
        }
        ?>
    </body>
</html>
