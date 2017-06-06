<h1 class="page-header">Clientes</h1>
<form action="?c=Cliente" method="post">

    <div class="well well-sm text-right">

        <div  style=" float: left; width:300px;">
            <label style=" float: left; height: 60px; margin-top: 7px; margin-right: 7px">Buscar:</label>
            <input class="form-control" id="buscar" type="text"  placeholder="Escriba algo para buscar" style="width:230px;" />
        </div>
        <input type="submit" value="Eliminar" name="a" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" class="btn btn-primary"/>
    </div>

    <table id="tabla" class="table table-striped">
        <thead>
            <tr>
                <th style="width:50px;"></th>
                <th style="width:125px;">Cédula</th>
                <th style="width:125px;">Nombre</th>
                <th style="width:125px;">Email</th>
                <th style="width:125px;">Telefono</th>
                <th style="width:125px;">Usuario</th>
                <th style="width:125px;">Sexo</th>
                <th style="width:125px;">Provincia</th>
                <th style="width:125px;">Cantón</th>
                <th style="width:150px;">Dirección</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->modelCliente->Listar() as $r): ?>
                <?php $valor = $r->idCliente; ?>
                <tr>
                    <td><input type=radio name=idCliente value=<?php echo $r->idCliente; ?> ></td>
                    <td><?php echo $r->idCliente; ?></td>
                    <td><?php echo $r->nombre; ?></td>
                    <td><?php echo $r->email; ?></td>
                    <td><?php echo $r->telefono; ?></td>
                    <td><?php echo $r->nomUsuario; ?></td>
                    <td><?php echo $r->sexo == 1 ? 'Masculino' : 'Femenino'; ?></td>
                    <td><?php if($r->provincia == 1){ echo 'Guanacaste' ;}else if ($r->provincia == 2) {echo 'Puntarenas' ;}
                    else if ($r->provincia == 2) {echo 'San José' ;}else if ($r->provincia == 2) {echo 'Cartago' ;}
                    else if ($r->provincia == 2) {echo 'Heredia' ;}else if ($r->provincia == 2) {echo 'Alajuela' ;}
                    else{echo 'Limón' ;}
                    ?></td>
                    <td><?php echo $r->canton; ?></td>
                    <td><?php echo $r->dirExacta; ?></td>
                </tr>
            <?php endforeach; ?>
        <script src="archivos/js/buscador.js"></script>
        </tbody>
    </table> 

</form>

