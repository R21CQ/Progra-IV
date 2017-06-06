<?php

include_once 'model/cicloModel.php';

class CicloController{
    
    private $modelCiclo;
    
    public function __CONSTRUCT(){
        $this->modelCiclo = new Ciclo();
    }
    
    public function Index(){
        require_once 'view/HeaderAdmin.php';
        require_once 'view/administrador/Ciclo/Ciclo.php';
    }
}
