<h1 class="page-header">
    <?php echo $alm->idInventario != null ? 'Editar Registro':'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Producto">Productos</a></li>
  <li class="active"><?php echo $alm->idInventario != null ? 'Editar Registro':'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Inventario&a=Guardar" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Codigo del Producto: </label>
        <input name="idProducto" value="<?php echo $alm->idInventario; ?>" class="form-control" placeholder="Ingrese el codigo del producto" data-validacion-tipo="requerido"/>
    </div>
    <div class="form-group">
        <label>Imagen: </label>
        <input readonly type="text" name="producto" value="<?php echo $alm->producto; ?>" class="form-control" data-validacion-tipo="requerido"/>
    </div>
    <div class="form-group">
        <label>Producto: </label>
        <input readonly type="text" name="producto" value="<?php echo $alm->producto; ?>" data-validacion-tipo="requerido"/>
    </div>
    <div class="form-group">
        <label>Ciclo: </label>
        <input readonly type="text" name="ciclo" value="<?php echo $alm->ciclo; ?>" class="form-control" placeholder="Ingrese la descripcion del producto" data-validacion-tipo="requerido"/>
    </div>
   
    <div class="form-group">
        <label>Existencias: </label>
        <input type="text" name="precio" value="<?php echo $alm->existencias; ?>" class="form-control" placeholder="Ingrese el precio" data-validacion-tipo="requerido" />
    </div>
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>