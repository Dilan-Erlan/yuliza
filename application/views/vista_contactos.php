

<main id="main" class="main">
<center>
<div class="pagetitle">
  <h1>LISTADO CONTACTOS</h1>

</div><!-- End Page Title -->
</center>

              


        <table border=1 class="table table-bordered border-primary">
        <center>
        
        <a target="_blank" class="btn btn-warning" href="<?= base_url("reporte/imprimir"); ?>">imprimir</a>
        </center>
        <tr>
            <td>id</td>
            <td>Nombre</td>
            <td>Telefono</td>
            <td>Email</td>
            <td></td>
        </tr>
        <?php $s=1; foreach($ver as $fila) {?>
                <tr>
                    <td><?=$s++?></td>
                    <td><?= $fila->nombre ?></td>
                    <td><?= $fila->telefono ?></td>
                    <td><?= $fila->email ?></td>
                    <td><a href="<?=base_url('contactos/eliminar/'.$fila->id)?>" class="btn btn-outline-danger">Eliminar</a>
                    <a href="<?=base_url('contactos/editar/'.$fila->id)?>" class="btn btn-outline-success">Editar</a>
                    <a target="_blank" class="btn btn-warning" href="<?= base_url('reporte/imprimir2/'.$fila->id)?>">Imprimir</a>
                </td>
                </tr>
        <?php } ?>
    </table>

   