<?php

/* va haber la interacción con la base de datos */

class Empleado {

    /* Vamos a consultar información, pero antes de consultar, vamos a crear esa 
       consulta en el modelo. */

       public $id;
       public $nombre;
       public $correo;

       public function __construct( $id, $nombre, $correo ) {

            $this->id = $id;
            $this->nombre = $nombre;
            $this->correo = $correo;

       }

       public static function  consultar() {

            /* Vamos a requerir lo que es un arreglo para almacenar todos los 
               empleaodos que vamos a recuperar de la base de datos. */
            $listaEmpleados = [];
            /* tambien necesitamos la conexión a la base de datos */
            $conexionBD = BD::crearInstancia();
            /* esta conexion, pues va tener una instrución sql  */
            $sql = $conexionBD->query( "SELECT * FROM empleados" );
            /* cuando nosotros hagamos esta consulta, pues necesitamos recuperar información para
               almacenarlo en la listaEmpleados. Y tener este grupo de registros.  */

            /* Cuando nostros consultamos la información, pues va retornar datos y para que nosotros
               podamos recuperar datos, pues haremos un foreach, lo vamos hacer a partir de los datos
               que retorne. */
               
            /* fetchAll() devuelve un array que contiene tadas las filas restantes del conjunto de resultados.  */
            foreach ( $sql->fetchAll() as $empleado ) {
                
                /* Como ya tengo todos los registros recuperados, pues voy a crear la relación
                   para que se almacene la información en la lista y yo tenga un grupo de registros, y
                   a partir de esta lista pues voy a crear lo que es una instancia del mismo empleado
                   (ya que va hacer una instancia de esta clase, que se llama empleado, y esta clase 
                   tiene un constructor con parametros, por ende recibe argumentos).
                */

                /* Del empleado que recuperaste, pues le vamos a poner lo que es el id */
                $listaEmpleados[] = new Empleado($empleado['id'], $empleado['nombre'], $empleado['correo']);

            }

            return $listaEmpleados;

       }

    public static function crear( $nombre, $correo ) {

        /* Creamos una variable para almacenar la conexion  */
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare( "INSERT INTO empleados( nombre, correo ) VALUES ( ?, ? ) " );
        $sql->execute( array( $nombre, $correo ) );

    }

    public static function borrar( $id ){

         $conexionBD = BD::crearInstancia();
         $sql = $conexionBD->prepare( "DELETE FROM empleados WHERE id = ?" );
         $sql->execute( array( $id ) );
         
   }

    public static function buscar( $id ){

         $conexionBD = BD::crearInstancia();
         $sql = $conexionBD->prepare( "SELECT * FROM empleados WHERE id = ?" );
         $sql->execute( array( $id ) );
         $empleado = $sql->fetch();
         return new Empleado($empleado['id'], $empleado['nombre'], $empleado['correo']);
         
   }

   public static function editar( $id, $nombre, $correo ){
       
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare( "UPDATE empleados SET nombre = ?, correo = ? WHERE id = ? " );
        $sql->execute( array( $nombre, $correo, $id ) );      

   }


}

?>