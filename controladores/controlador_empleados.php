<?php

include_once("modelos/empleado.php");
include_once("conexion.php");

class ControladorEmpleados {

    public function inicio() {
        
       $empleados = Empleado::consultar();

        include_once( "vistas/empleados/inicio.php" );

    }

    public function crear() {

        // Como el archivo crear.php esta enviando datos, entonces acá tambien los recibimos, entonces...
        // si hay un envio, entonces vamos a imprimir los datos que estan en ese envio.
        if ($_POST) {

            print_r($_POST); 
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];

            Empleado::crear( $nombre, $correo );
            header( "location:./?controlador=empleados&accion=inicio" );
            
        }

        include_once("vistas/empleados/crear.php");

    }

    public function editar() {

        if($_POST) {

            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];

            Empleado::editar( $id, $nombre, $correo );
            header( "location:./?controlador=empleados&accion=inicio" );
            
        }

        $id= $_GET['id'];
        $empleado = Empleado::buscar( $id );

    include_once("vistas/empleados/editar.php");

    }

    public function borrar() {

        $id = $_GET['id'];
        Empleado::borrar( $id );
        header( "location:./?controlador=empleados&accion=inicio" );

    }

}


?>