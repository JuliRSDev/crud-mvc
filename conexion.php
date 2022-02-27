<?php

class BD {

    private static $instancia = NULL;

    /* Acá nos estamos conectando, conectamos con crearInstancia() */
    public static function crearInstancia() {

        /* Vamos a validar, si por ejemplo... esta conexion existe 
           pues no la vamos hacer, y si no existe pues la vamos a crear. */
           
        if ( !isset( self::$instancia ) ) {
            
            $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

            // Si no hay una conexion pues la vamos a crear.
            self::$instancia = new PDO('mysql:host=localhost;dbname=empleados', 'root', '', $opcionesPDO);

        }
        // Si ya hay una conexion pues solo la retornamos.
        return self::$instancia;

    }

}

?>