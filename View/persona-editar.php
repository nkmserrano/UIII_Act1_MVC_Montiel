<h1 class="page-header">
    <?php echo $alm->id_boleto != null ? $alm->codigo : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Persona">Boletos</a></li>
  <li class="active"><?php echo $alm->id_boleto != null ? $alm->codigo : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=Persona&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_boleto" value="<?php echo $alm->id_boleto; ?>" />
    
    <div class="form-group">
        <label>Seccion</label>
        <input type="text" name="seccion" value="<?php echo $alm->seccion; ?>" class="form-control" placeholder="Ingrese la seccion" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="form-group">
        <label>Fila</label>
        <input type="text" name="fila" value="<?php echo $alm->fila; ?>" class="form-control" placeholder="Ingrese la fila" data-validacion-tipo="requerido|min:5" />
    </div>
    
    <div class="form-group">
        <label>Asiento</label>
        <input type="text" name="asiento" value="<?php echo $alm->asiento; ?>" class="form-control" placeholder="Ingrese el asiento" data-validacion-tipo="requerido|min:5" />
    </div>
    
    <div class="form-group">
        <label>Artista o Banda</label>
        <input type="text" name="artista" value="<?php echo $alm->artista; ?>" class="form-control" placeholder="Ingrese el artista/banda" data-validacion-tipo="requerido|min:8" />
    </div>
    
    <div class="form-group">
        <label>Ciudad</label>
        <input type="text" name="ciudad" value="<?php echo $alm->ciudad; ?>" class="form-control" placeholder="Ingrese la ciudad donde sera" data-validacion-tipo="requerido|min:8" />
    </div>

    <div class="form-group">
        <label>Lugar/Estadio</label>
        <input type="text" name="lugar" value="<?php echo $alm->lugar; ?>" class="form-control" placeholder="Ingrese el lugar donde sera" data-validacion-tipo="requerido|min:8" />
    </div>

    <div class="form-group">
        <label>Fecha del concierto</label>
        <input type="date" name="dia" value="<?php echo $alm->dia; ?>" class="form-control" placeholder="Ingrese la fecha del concierto" data-validacion-tipo="requerido|date" />
    </div>
    
    <div class="form-group">
        <label>Hora del concierto</label>
        <input type="time" name="hora" value="<?php echo $alm->hora; ?>" class="form-control" placeholder="Ingrese la hora del concierto" data-validacion-tipo="requerido|min:8" />
    </div>

    <div class="form-group">
        <label>Codigo del boleto</label>
        <input type="number" name="codigo" value="<?php echo $alm->codigo; ?>" class="form-control" placeholder="Ingrese el codigo del boleto" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Precio del boleto</label>
        <input type="number" name="precio" value="<?php echo $alm->precio; ?>" class="form-control" placeholder="Ingrese el precio del boleto" data-validacion-tipo="requerido|min:8" />
    </div>
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
