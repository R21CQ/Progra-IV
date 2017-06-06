<!-- CSS -->
<link rel="stylesheet" href="archivos/css/estiloArticulo.css" type="text/css"/>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>



<h1 class="page-header">Articulos</h1>

<?php foreach ($this->modelArticulo->Listar() as $r):
    ?>

    <div class="col-md-3">
        <div id="cajaArticulos" class="text-center">
            <?php $valor = $r->idProducto; ?>

            <img class="img-responsive center-block" id="tamanoImagen" src="data:image/jpg; base64,<?php echo base64_encode($r->imagen); ?>"/>

            <label name="descripcion">Descripcion: <?php echo $r->descripcion; ?></label>
            <br>
            <label name="idProducto"> Producto: <?php echo $r->idProducto; ?></label>
            <br>
            <label name="clase"> Clase: <?php echo $r->tipoProducto == 1 ? 'Bicicletas' : 'Implementos'; ?></label>
            <br>
            <label name="precio"> Precio: <?php echo $r->precio; ?></label><br>

            <a href="#" class="btn btn-default producto" precio="<?php echo $r->precio; ?>" titulo="<?php echo $r->descripcion; ?>" role="button">Comprar</a></p>

        </div>

    </div>

<?php endforeach; ?> 

<script src="archivos/js/minicart.js"></script>
<script>
    // configuración inicial del carrito 
    paypal.minicart.render({
        strings: {
            button: 'Pagar'
            , buttonAlt: "Total"
            , subtotal: 'Total:'
            , empty: 'No hay productos en el carrito'
        }
    });
    // Eventos para agregar productos al carrito

    $('.producto').click(function (e) {
        e.stopPropagation();
        paypal.minicart.cart.add({
            business: 'maikel.chavarriaalvarado@gmail.com', // Cuenta paypal para recibir el dinero
            item_name: $(this).attr("titulo"),
            amount: $(this).attr("precio"),
            currency_code: 'CRC'
        });
    });

</script>
