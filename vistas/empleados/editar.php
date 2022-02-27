<div class="card">
    <div class="card-header">
        Agregar Empleado
    </div>
    <div class="card-body">

        <form action="" method="post">

            <div class="mb-3">
              <label for="id" class="form-label">ID:</label>
              <input readonly type="text" class="form-control" value="<?php echo $empleado->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID Empleado">
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text|password|email|number|submit|date|datetime|datetime-local|month|color|range|search|tel|time|url|week"
                class="form-control" value="<?php echo $empleado->nombre ?>" required name="nombre" id="nombre" aria-describedby="helpId" 
                placeholder="Nombre del empleado">
            </div>

            <div class="mb-3">
              <label for="correo" class="form-label">Correo:</label>
              <input type="email" required class="form-control" value="<?php echo $empleado->correo ?>" name="correo" id="correo" aria-describedby="" placeholder="Correo del empleado">
            </div>

            <input class="btn btn-success" type="submit" value="Editar empleado">
            <a href="?controlador=empleados&accion=inicio" class="btn btn-primary">Cancelar</a>

        </form>

    </div>
</div>