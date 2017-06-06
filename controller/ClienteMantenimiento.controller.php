<?php

include_once 'model/loginModel.php';

class ClienteMantenimientoController{
    
    private $modelCliente;
    
    public function __CONSTRUCT(){
        $this->modelCliente = new Login();
    }
    
    public function Index(){
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/VerCliente/ClienteMantenimiento.php';
    }
    
    public function Eliminar(){
        $this->modelCliente->Eliminar($_REQUEST['idCliente']);
        header('Location: Index.php');
    }
    
   
}