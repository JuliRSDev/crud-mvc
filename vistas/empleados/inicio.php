<a name="" id="" class="btn btn-success" href="?controlador=empleados&accion=crear" role="button">Agregar empleado</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>

    <!-- Estamos recuperando todos los datos del modelo, el la funcion consulta, consulta 
         toda la información, el controlador accede a esa funcion, despues el controlador 
         muestra la vista. y esta es la vista, que estamos recuperando los datos. -->
    <?php  foreach( $empleados as $empleado ){ ?>
        
        <tr>
            <td> <?php echo $empleado->id; ?> </td>
            <td><?php echo $empleado->nombre; ?></td>
            <td><?php echo $empleado->correo; ?></td>
            <td>

                <div class="btn-group" role="group" aria-label="">
                    <a href="?controlador=empleados&accion=editar&id=<?php echo $empleado->id; ?>"
                     class="btn btn-info">Editar</a>
                    <!-- a demoas, le agregamos &id, para que sepa que id voy a borrar -->
                    <a href="?controlador=empleados&accion=borrar&id=<?php echo $empleado->id; ?>" 
                    class="btn btn-danger">Borrar</a>
                </div>

            </td>
        </tr>

    <?php } ?>

    </tbody>
</table>
