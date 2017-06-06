<?php

include_once 'model/loginModel.php';

class ClienteController{
    
    private $modelCliente;
    
    public function __CONSTRUCT(){
        $this->modelCliente = new Login();
    }
    
    public function Index(){
        require_once 'view/HeaderAdmin.php';
        require_once 'view/administrador/VerCliente/Clientes.php';
    }
    
    public function Registrar(){
        $alm = new Login();
        
        if(isset($_REQUEST['idClient'])){
            $alm = $this->modelCliente->Obtener($_REQUEST['idClient']);
        }
        
        require_once 'view/HeaderAdmin.php';
        require_once 'view/administrador/VerCliente/Clientes.php';
    }
    
    public function Eliminar(){
        $this->modelCliente->Eliminar($_REQUEST['idClient']);
        header('Location: Index.php');
    }
    
   
}