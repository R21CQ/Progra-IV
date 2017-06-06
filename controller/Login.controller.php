<?php

include_once 'model/loginModel.php';

class LoginController {

    private $modelLogin;

    public function __CONSTRUCT() {
        $this->modelLogin = new Login();
    }

    public function Index() {
        require_once 'view/Header.php';
        require_once 'view/cliente/Login.php';
        require_once 'view/Footer.php';
    }

    public function Registrar() {
        $alm = new Login();

        if (isset($_REQUEST['idCliente'])) {
            $alm = $this->modelLogin->Obtener($_REQUEST['idCliente']);
        }

        require_once 'view/Header.php';
        require_once 'view/cliente/Login.php';
        require_once 'view/Footer.php';
    }

    public function Guardar() {

        $alm = new Login();

        $alm->idCliente = $_REQUEST['idCliente'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->email = $_REQUEST['email'];
        $alm->telefono = $_REQUEST['telefono'];
        $alm->nomUsuario = $_REQUEST['nomUsuario'];
        $alm->contrasena = $_REQUEST['contraseña'];
        $alm->sexo = $_REQUEST['sexo'];
        $alm->provincia = $_REQUEST['provincia'];
        $alm->canton = $_REQUEST['canton'];
        $alm->dirExacta = $_REQUEST['dirExacta'];

        $this->modelLogin->Obtener($_REQUEST['idCliente']) ?
                        $this->modelLogin->Actualizar($alm) :
                        $this->modelLogin->Registrar($alm);

        header('Location: Index.php');
    }

    public function Ingresar() {
        $alm = new Login();
        $user = $_REQUEST['usuarios'];
        $clave = $_REQUEST['clave'];

        if (isset($_REQUEST['usuarios']) & isset($_REQUEST['clave'])) {
            $alm = $this->modelLogin->Inicio($user, $clave);
        }

        if ($alm != NULL) {
            if ($alm->nomUsuario = 'administrador') {
                echo "<script>location.href='?c=HomeMantenimiento&a=Index'</script>";
            }
            else "<script>location.href='?c=Articulo&a=Index'</script>";
        } else {
            echo '<script>alert("ERROR DE AUTENTICACION")</script>';
            echo "<script>location.href='?c=Inicio&a=Index'</script>";
        }
    }

}
