<?php

class Inventario {

    private $pdo;
    public $idInventario;
    public $producto;
    public $ciclo;
    public $existencias;

    public function __CONSTRUCT() {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}