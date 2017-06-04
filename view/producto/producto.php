<h1 class="page-header">Productos</h1>
<form action="?c=Producto" method="post">

    <div class="well well-sm text-right">

        <div  style=" float: left; width:300px;">
            <label style=" float: left; height: 60px; margin-top: 7px; margin-right: 7px">Buscar:</label>
            <input class="form-control" id="buscar" type="text"  placeholder="Escriba algo para buscar" style="width:230px;" />
        </div>

        <a class="btn btn-primary" href="?c=Producto&a=Registrar">Registrar</a>
        <input type="submit" value="Editar" name="a" class="btn btn-primary"/>
        <input type="submit" value="Eliminar" name="a" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" class="btn btn-primary"/>
    </div>

    <table id="tabla" class="table table-striped">
        <thead>
            <tr>
                <th style="width:70px;"></th>
                <th style="width:220px;">Id Producto</th>
                <th style="width:220px;">Imagen</th>
                <th style="width:220px;">Tipo de Producto</th>
                <th style="width:250px;">Descripcion</th>
                <th style="width:220px;">Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->modelProd->Listar() as $r): ?>
                <?php $valor = $r->idProducto; ?>
                <tr>
                    <td><input type=radio name=Producto value=<?php echo $r->idProducto; ?> ></td>
                    <td><?php echo $r->idProducto; ?></td>
                    <td><img width="40" height="40" src="data:image/jpg; base64,<?php echo base64_encode($r->imagen); ?>"/></td>
                    <td><?php echo $r->tipoProducto == 1 ? 'Bicicletas' : 'Implementos'; ?></td>
                    <td><?php echo $r->descripcion; ?></td>
                    <td><?php echo $r->precio; ?></td>
                </tr>
            <?php endforeach; ?>
        <script src="archivos/js/buscador.js"></script>
        </tbody>
    </table> 

</form>
