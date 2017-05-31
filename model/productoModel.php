<?php

class Producto {

    private $pdo;
    public $idProducto;
    public $imagen;
    public $tipoProducto;
    public $descripcion;
    public $precio;

    public function __CONSTRUCT() {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar() {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM producto");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id) {
        try {
            $stm = $this->pdo
            ->prepare("SELECT * FROM producto WHERE idProducto = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id) {
        try {
            $stm = $this->pdo
                    ->prepare("DELETE FROM producto WHERE idProducto = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data) {
        try {
            $sql = "UPDATE producto SET imagen = ?, tipoProducto = ?, descripcion =?, precio = ?, WHERE idProducto = ?";

            $this->pdo->prepare($sql)
                    ->execute(array($data->imagen,$data->tipoProducto,$data->descripcion, $data->precio, $data->idProducto)
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(Producto $data) {
        try {
            $sql = "INSERT INTO producto (idProducto,imagen,tipoProducto,descripcion, precio) 
		        VALUES (?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                    ->execute(array($data->idProducto,$data->imagen,$data->tipoProducto,$data->descripcion, $data->precio)
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
