<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemController
 *
 * @author Karol
 */
define("contrasenia_usuario", "m._cl22@ddDPZ_ffDcc1!23ss");

class ItemController {

    //
    //put your code here


    public function __construct() {
        $this->view = new View();
    }

    public function CategoriaView() {
        $this->view->show("Item/Categoria.php");
    }

    public function loginView() {
        $this->view->show("Item/login.php");
    }

    public function sobreNosotrosView() {
        $this->view->show("Item/SobreNosotros.php");
    }

    public function inicioView() {
        $this->view->show("indexView.php");
    }

    public function contactoView() {
        $this->view->show("Item/Contacto.php");
    }

    public function listaProductoView() {
        $this->view->show("Item/listaProducto.php");
    }

    public function registrarmeView() {
        $this->view->show("Item/Registrarme.php");
    }

    public function generandoContrasennia() {
        $this->view->show("Item/GenerandoContrasennia.php");
    }

    public function nuevaContrasennia() {
        $this->view->show("Item/NuevaContrasennia.php");
    }

    public function listar_direccion() {
        require 'model/data/ContactoData.php';
        $PD = new ContactoData();
        echo json_encode($PD->listar_direccion());
    }
     public function listar_correo_existente() {
        require 'model/data/ContactoData.php';
        $PD = new ContactoData();
        echo json_encode($PD->listar_correo_existente($_POST["correo"]));
    }

    public function listar_contacto() {
        require 'model/data/ContactoData.php';
        $PD = new ContactoData();
        echo json_encode($PD->listar_contacto());
    }

    public function registrar_usuario() {
        require 'model/data/UsuarioData.php';
        $items = new UsuarioData();

        $clave = $_POST['contrasenia_usuario'];
        $encriptada_clave = $clave;
        $items->registrar_usuario($_POST['id_rol'], $_POST['cedula_usuario'], $_POST['telefono_usuario'],
                $_POST['nombre_usuario'], $_POST['apellido_usuario'], $encriptada_clave, $_POST['direccion_usuario'],
                $_POST['correo_usuario']);
        $this->view->show("Item/Registrarme.php", $items);
    }

    public function autenticacion_usuario() {
        require 'model/data/UsuarioData.php';
        $usuario = new UsuarioData();
        $clave = ($_GET['contrasenia_usuario']);
        //  $clave= $this->encripto($_GET['contrasenia_usuario']);
        if (isset($clave, $_GET['correo_usuario'])) {
            $autenticacion = $usuario->autenticacion_usuario($clave, $_GET['correo_usuario']);
            if ($autenticacion > 0) {
                session_start();
                if (!isset($_SESSION['usuario'])) {
                    $_SESSION['usuario'] = '';
                }
                $_SESSION['usuario'] = $_GET['correo_usuario'];
                $this->view->show("Cliente/MenuPrincipal.php");
            } else {
                echo '<script src="./public/js/jquery-3.3.1.js" type="text/javascript"> </script>  <script>   $(function() {   $("#error2").html("<div > <strong>Advertencia!</strong> Correo y/o contraseña inválida.  </div> ");  });</script>';
                $this->view->show("Item/login.php");
            }
        } else {
            $this->view->show("Item/login.php");
        }
    }

    public function cerrar_sesion() {
        session_start();
        if (session_destroy()) {
            print "Sesión destruida correctamente Cliente";
            session_unset();
        } else {
            print "Error al destruir la sesión Cliente";
        }
        $this->view->show("Item/login.php");
    }

    public function confirmar_correo() {
        require 'model/data/UsuarioData.php';
        $items = new UsuarioData();
        $confirmarcion = $items->confirmar_correo($_POST["correo_usuario"]);
        if ($confirmarcion > 0) {
            $this->view->show("Item/GenerandoContrasennia.php");
        } else {
            echo $this->enviar_mensaje("El correo eléctronico no está registrado en el sistema", "Advertencia", "mensaje");
            $this->view->show("Item/NuevaContrasennia.php");
        }
    }

    
    public function generando_contrasennia_usuario(){
     require 'model/data/UsuarioData.php';
        $items = new UsuarioData();
         $nuevacontrasennia=$items->generando_nueva_contrasennia($_POST["contrasenia_usuario"], $_POST["correo_usuario"]);
         if ($nuevacontrasennia > 0) {
             echo $this->enviar_mensaje("Contraseña  creada  con exito", "Error", "mensaje");
            
            $this->view->show("Item/GenerandoContrasennia.php");
        } else {
            echo $this->enviar_mensaje("Contraseña no creada ", "Error", "mensaje");
            $this->view->show("Item/NuevaContrasennia.php");
        }
    }
 

    public function enviar_mensaje($mensaje, $tipo, $etiqueta) {
        $salida = '<script src="./public/js/jquery-3.3.1.js" type="text/javascript"> </script>  <script>   $(function() {   $("#' . $etiqueta . '").html("<div > <strong>' . $tipo . '</strong> ' . $mensaje . '  </div> ");  });</script>';
        return $salida;
    }

}
