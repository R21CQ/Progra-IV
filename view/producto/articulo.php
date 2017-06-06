<link rel="stylesheet" href="archivos/css/estiloCajas.css" type="text/css"/>
<h1 class="page-header">Articulos</h1>
<form action="?c=Articulo" method="post">



    <?php foreach ($this->modelArticulo->Listar() as $r): 
        ?>
    
    <div id="cajaArticulos">



            <?php $valor = $r->idProducto; ?>

            <img id="tamanoImagen" src="data:image/jpg; base64,<?php echo base64_encode($r->imagen); ?>"/>
            <br>
            <label name="Producto:"> Producto: <?php echo $r->idProducto; ?></label>
            <br>
            <label name="Clase:"> Clase: <?php echo $r->tipoProducto == 1 ? 'Bicicletas' : 'Implementos'; ?></label>
            <br>
            <label name="Descripcion:">Descripcion: <?php echo $r->descripcion; ?></label>
            <br>
            <label name="Precio:"> Precio: <?php echo $r->precio; ?></label>

            <button class="btn btn-info btn-lg btn-block">Agregar</button>


        </div> 
    <?php endforeach; ?> 


</form>
