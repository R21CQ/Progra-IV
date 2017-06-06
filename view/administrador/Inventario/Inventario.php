<h1 class="page-header">Inventario</h1>
<form action="?c=Inventario" method="post">

    <div class="well well-sm text-right">

        <div  style=" float: left; width:300px;">
            <label style=" float: left; height: 60px; margin-top: 7px; margin-right: 7px">Buscar:</label>
            <input class="form-control" id="buscar" type="text"  placeholder="Escriba algo para buscar" style="width:230px;" />
        </div>

        <a class="btn btn-primary" href="?c=Inventario&a=Registrar">Registrar</a>
        <input type="submit" value="Editar" name="a" class="btn btn-primary"/>
        <input type="submit" value="Eliminar" name="a" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" class="btn btn-primary"/>
    </div>

    <table id="tabla" class="table table-striped">
        <thead>
            <tr>
                <th style="width:80px;"></th>
                <th style="width:280px;">Id Inventario</th>
                <th style="width:280px;">Producto</th>
                <th style="width:280px;">Ciclo</th>
                <th style="width:280px;">Existencias</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->modelInventario->Listar() as $r): ?>
                <?php $valor = $r->idInventario; ?>
                <tr>
                    <td><input type=radio name=idInventario value=<?php echo $r->idInventario; ?> ></td>
                    <td><?php echo $r->idInventario; ?></td>
                    <td><?php echo $r->producto == 1 ? 'Bicicletas' : 'Implementos'; ?></td>
                    <td><?php echo $r->ciclo; ?></td>
                    <td><?php echo $r->existencias; ?></td>
                </tr>
            <?php endforeach; ?>
        <script src="archivos/js/buscador.js"></script>
        </tbody>
    </table> 

</form>

