<?php

include_once 'model/articuloModel.php';

class ArticuloController{
    
    private $modelArticulo;
    
    public function __CONSTRUCT(){
        $this->modelArticulo = new Articulo();
    }
    
    public function Index(){
        require_once 'view/Header.php';
        require_once 'view/producto/articulo.php';
        require_once 'view/Footer.php';
    }
    
    
}
