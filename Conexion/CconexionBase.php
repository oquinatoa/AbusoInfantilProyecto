<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CconexionBase
 *
 * @author Usuario
 */
class CconexionBase {

    public $link;
    public $db;

    public function __construct() {
        
    }

    function conexion() {
        $this->link = mysqli_connect('localhost', 'oswaldo', '1234') or die("No se ha podido conectar al servidor de Base de datos");


        $this->db = mysqli_select_db($this->link, 'abusoinfantil')or die('No se pudo seleccionar la base de datos');
        echo 'Connected successfully<br>';
        return $this->link;
    }

    function consultar() {
        $query = 'select * from t_persona;';
        $result = mysqli_query($this->link, $query) or die("Algo ha ido mal en la consulta a la base de datos");
        return $result;
    }

    function cerrar() {
        mysql_close($link);
    }

}
