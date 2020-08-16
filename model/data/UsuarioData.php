<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemData
 *
 * @author Karol
 */
class UsuarioData {

    //put your code here


    protected $db;

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }

    public function autenticacion_usuario($contrasenia_usuario, $correo_usuario) {
      $sql = 'CALL sp_autenticacion_usuario("' . $contrasenia_usuario . '", "' . $correo_usuario . '")';
        $del = $this->db->prepare($sql);
        if ($del->execute()) {
            $count = $del->fetch();
            if ($count['total'] > 0)
                return 1;
            else
                return 0;
        }
    }
    public function confirmar_correo($correo_usuario) {
      $sql = 'CALL sp_confirmar_correo_electronico( "' . $correo_usuario . '")';
        $del = $this->db->prepare($sql);
        if ($del->execute()) {
            $count = $del->fetch();
            if ($count['total'] > 0)
                return 1;
            else
                return 0;
        }
    }

    public function generando_nueva_contrasennia($contrasenia_usuario, $correo_usuario){
       $sql = 'CALL sp_generando_nueva_contrasennia("' . $contrasenia_usuario . '", "' . $correo_usuario . '")';
        $del = $this->db->prepare($sql);
        if ($del->execute()) {
           return 1;
        } else
            return 0;
    }
    
    public function registrar_usuario($id_rol, $cedula_usuario, $telefono_usuario, $nombre_usuario, $apellido_usuario, $contrasenia_usuario, $direccion_usuario, $correo_usuario) {
        $data = array($id_rol, $cedula_usuario, $telefono_usuario, $nombre_usuario, $apellido_usuario,
            $contrasenia_usuario, $direccion_usuario, $correo_usuario);
        $consulta = $this->db->prepare('CALL sp_registrar_usuario(?,?,?,?,?,?,?,?)');
        $consulta->execute($data);
        echo $consulta->errorInfo()[2];
    }

}
