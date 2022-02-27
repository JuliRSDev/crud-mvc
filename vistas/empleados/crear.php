<div class="card">
    <div class="card-header">
        Agregar Empleado
    </div>
    <div class="card-body">

        <!-- Aca estamos enviado la información, pero tambien lo estamos enviar a el metodo
            crear() (que esta en el controlador_empleados.php) ahí estan los metodos de este 
            archivo empleados, por ende, cuando le demos en el boton de agregar empleados, tambien
            se va mandar la información a su respectivo metodo, la cual es crear() -->

        <form action="" method="post">

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text|password|email|number|submit|date|datetime|datetime-local|month|color|range|search|tel|time|url|week"
                class="form-control" required name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del empleado">
            </div>

            <div class="mb-3">
              <label for="correo" class="form-label">Correo:</label>
              <input type="email" required class="form-control" name="correo" id="correo" aria-describedby="" placeholder="Correo del empleado">
            </div>

            <input class="btn btn-success" type="submit" value="Agregar empleado">
            <a href="?controlador=empleados&accion=inicio" class="btn btn-primary">Cancelar</a>

        </form>

    </div>
</div>