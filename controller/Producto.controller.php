<?php

include_once 'model/productoModel.php';

class ProductoController{
    
    private $modelProd;
    
    public function __CONSTRUCT(){
        $this->modelProd = new Producto();
    }
    
    public function Index(){
        require_once 'view/Header.php';
        require_once 'view/producto/producto.php';
        require_once 'view/Footer.php';
    }
    
    public function Editar(){
        $alm = new Producto();
        
        if(isset($_REQUEST['idProducto'])){
            $alm = $this->modelProd->Obtener($_REQUEST['idProducto']);
        }
        
        require_once 'view/Header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/Footer.php';
    }
    
    public function Registrar(){
        $alm = new Producto();
        
        if(isset($_REQUEST['idProducto'])){
            $alm = $this->modelProd->Obtener($_REQUEST['idProducto']);
        }
        
        require_once 'view/Header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/Footer.php';
    }
    
    public function Guardar(){
        $alm = new Producto();
        
        $alm->idProducto = $_REQUEST['idProducto'];

        
        $temp = file_get_contents($_FILES['imagen']['tmp_name']);

        $alm->imagen = $temp;

        $foto = file_get_contents($_FILES['imagen']['tmp_name']);
        $alm->imagen = $foto;
        
        $alm->tipoProducto = $_REQUEST['tipoProducto'];
        $alm->descripcion = $_REQUEST['descripcion'];
        $alm->precio = $_REQUEST['precio'];
        
        $this->modelProd->Obtener($_REQUEST['idProducto'])?
                         $this->modelProd->Actualizar($alm):
                         $this->modelProd->Registrar($alm);
              
        header('Location: Index.php');
    }
    
    public function Eliminar(){
        $this->modelProd->Eliminar($_REQUEST['idProducto']);
        header('Location: Index.php');
    }
}


