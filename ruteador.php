<?php

// Forma dinamica :)

include_once("controladores/controlador_".$controlador.".php");

$objControlador = 'Controlador' . ucfirst($controlador);

$controlador = new $objControlador();

$controlador->$accion();



/*  Forma Estatica.
include_once("controladores/controlador_paginas.php");
$controlador = new ControladorPaginas();
$controlador->inicio();
 */
?>