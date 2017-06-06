<?php

class Login {

    private $pdo;
    public $idCliente;
    public $nombre;
    public $email;
    public $telefono;
    public $nomUsuario;
    public $contrasena;
    public $sexo;
    public $provincia;
    public $canton;
    public $dirExacta;
    

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

            $stm = $this->pdo->prepare("SELECT * FROM cliente");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id) {
        try {
            $stm = $this->pdo
            ->prepare("SELECT * FROM cliente WHERE idCliente = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id) {
        try {
            $stm = $this->pdo
                    ->prepare("DELETE FROM cliente WHERE idCliente = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data) {
        try {
            $sql = "UPDATE cliente SET nombre = ? , email = ?, telefono = ?, nomUsuario = ?, contrasena = ?, sexo = ?, provincia = ?, canton = ?, dirExacta = ?, WHERE idCliente = ?";

            $this->pdo->prepare($sql)
                    ->execute(array($data->nombre,$data->email,$data->telefono,$data->nomUsuario,$data->contrasena,$data->sexo,$data->provincia,$data->canton,$data->dirExacta,$data->idCliente)
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(Login $data) {
        try {
            $sql = "INSERT INTO cliente (idCliente,nombre,email,telefono,nomUsuario,contrasena,sexo,provincia,canton,dirExacta) 
		        VALUES (?, ?, ?, ?, ?,?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                    ->execute(array($data->idCliente,$data->nombre,$data->email,$data->telefono,$data->nomUsuario,$data->contrasena,$data->sexo,$data->provincia,$data->canton,$data->dirExacta)
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Guardar(Login $data) {
        try {
            $sql = "INSERT INTO cliente (idCliente, nombre, email, telefono, nomUsuario, contrasena, sexo, provincia, canton, dirExacta) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                    ->execute(array($data->idCliente,$data->nombre,$data->email,$data->telefono,$data->nomUsuario,$data->contrasena,$data->sexo,$data->provincia,$data->canton,$data->dirExacta)
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
      public function Inicio($id, $clave) {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM cliente WHERE nomUsuario = ? and contrasena=?");
            $stm->execute(array($id, $clave)); 
            return $stm->fetch(PDO::FETCH_OBJ); 
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

