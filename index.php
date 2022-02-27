<?php

/* Si no tienen valores los dos parametros(controlador y accion) entonces por
   defecto vamos a colocarle estos valores.(si tienen valores pues se los asignamos
   a las variables $controlador y $accion) */

$controlador = "paginas";
$accion = "inicio";

if ( isset($_GET['controlador']) && isset($_GET['accion']) ) {

    if ( ($_GET['controlador'] != "") && ($_GET['accion'] != "") ) {

        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];

    }

}

require_once("vistas/template.php");

?>