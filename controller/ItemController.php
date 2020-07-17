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

    public function registrar_usuario() {
        require 'model/data/UsuarioData.php';
        $items = new UsuarioData();
        $items->registrar_usuario($_POST['id_rol'], $_POST['cedula_usuario'], $_POST['telefono_usuario'], $_POST['nombre_usuario'],
                $_POST['apellido_usuario'], $_POST['contrasenia_usuario'], $_POST['direccion_usuario'], $_POST['correo_usuario']);
        $this->view->show("Item/Registrarme.php", $items);
    }

    public function autenticacion_usuario() {
        require 'model/data/UsuarioData.php';
        $usuario = new UsuarioData();
   
        if ( isset ($_POST['contrasenia_usuario'],$_POST['correo_usuario'] )) {

            $autenticacion = $usuario->autenticacion_usuario($_POST['contrasenia_usuario'], $_POST['correo_usuario']);
            
            if ($autenticacion > 0) {
                session_start();
                if (!isset($_SESSION['usuario'])) {    $_SESSION['usuario'] = ''; }
                    
                $_SESSION['usuario'] = $_POST['correo_usuario'];
                
                $this->view->show("Cliente/MenuPrincipal.php");
            } else
                $this->view->show("Item/login.php");
        } else{
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



}
