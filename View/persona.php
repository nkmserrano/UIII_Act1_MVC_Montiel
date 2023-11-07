<h1 class="page-header">Empresa BoleNais</h1>
<h2 class="page-header">Tabla Boletos</h2>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Persona&a=Crud">Agregar Boletos</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Seccion</th>
            <th>Fila</th>
            <th>Asiento</th>
            <th>Artista</th>
            <th>Ciudad</th>
            <th>Lugar</th>
            <th>Fecha del concierto</th>
            <th>Hora del concierto</th>
            <th>Codigo</th>
            <th>Precio</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->seccion; ?></td>
            <td><?php echo $r->fila; ?></td>
            <td><?php echo $r->asiento; ?></td>
            <td><?php echo $r->artista; ?></td>
            <td><?php echo $r->ciudad; ?></td>
            <td><?php echo $r->lugar; ?></td>
            <td><?php echo $r->dia; ?></td>
            <td><?php echo $r->hora; ?></td>
            <td><?php echo $r->codigo; ?></td>
            <td><?php echo $r->precio; ?></td>

            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Persona&a=Crud&id_boleto=<?php echo $r->id_boleto; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Persona&a=Eliminar&id_boleto=<?php echo $r->id_boleto; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
