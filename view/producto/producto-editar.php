 <h1 class="page-header">
    <?php echo $alm->idProducto != null ? 'Editar Registro':'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Producto">Productos</a></li>
  <li class="active"><?php echo $alm->idProducto != null ? 'Editar Registro':'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Producto&a=Guardar" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Codigo del Producto: </label>
        <input name="idProducto" value="<?php echo $alm->idProducto; ?>" class="form-control has-success has-feedback" placeholder="Ingrese el codigo del producto" data-validacion-tipo="requerido"/>
    </div>
    <div class="form-group">
        <label>Imagen: </label>
        <input type="file" name="imagen" value="<?php echo $alm->imagen; ?>" data-validacion-tipo="requerido" accept="image/*"/>
    </div>
    
    <div class="form-group">
        <label>Tipo de Producto: </label>
        <select name="tipoProducto" class="form-control" >
            <option <?php echo $alm->tipoProducto == 1 ? 'selected' : ''; ?> value="1">Bicicletas</option>
            <option <?php echo $alm->tipoProducto == 2 ? 'selected' : ''; ?> value="2">Implementos</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Descripcion: </label>
        <textarea type="" name="descripcion" value="<?php echo $alm->descripcion; ?>" class="form-control has-success has-feedback" placeholder="Ingrese la descripcion del producto" data-validacion-tipo="requerido"></textarea>
    </div>
   
    <div class="form-group">
        <label>Precio: </label>
        <input type="text" name="precio" value="<?php echo $alm->precio; ?>" class="form-control" placeholder="Ingrese el precio" data-validacion-tipo="requerido" />
    </div>
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>
