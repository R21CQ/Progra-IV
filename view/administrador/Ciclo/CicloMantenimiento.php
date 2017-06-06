<h1 class="page-header">Ciclos</h1>


<table id="tabla" class="table table-striped">
    <thead>
        <tr>
            <th style="width:50px;"></th>
            <th style="width:125px;">idCiclo</th>
            <th style="width:125px;">Nombre</th>
            <th style="width:125px;">Email</th>
            <th style="width:125px;">Telefono</th>
            <th style="width:125px;">Provincia</th>
            <th style="width:125px;">Cantón</th>
            <th style="width:150px;">Dirección</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($this->modelCiclo->Listar() as $r): ?>
            <?php $valor = $r->idCiclo; ?>
            <tr>
                <td><input type=radio name=idCliente value=<?php echo $r->idCiclo; ?> ></td>
                <td><?php echo $r->idCiclo; ?></td>
                <td><?php echo $r->nombre; ?></td>
                <td><?php echo $r->correo; ?></td>
                <td><?php echo $r->telefono; ?></td>
                <td><?php echo $r->provincia; ?></td>
                <td><?php echo $r->canton; ?></td>
                <td><?php echo $r->dirExacta; ?></td>
            </tr>
<?php endforeach; ?>
    </tbody>
</table> 



