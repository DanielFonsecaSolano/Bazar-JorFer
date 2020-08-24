<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactoData
 *
 * @author Karol
 */
class ContactoData {
    //put your code here
    
    
     protected $db;

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }
      public function listar_contacto() {
       $consulta = $this->db->prepare('call sp_listar_contacto ');
       $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
       public function listar_correo_existente($correo) {
       $consulta = $this->db->prepare('Select count(*) as total from usuario  where correo_usuario= "'.$correo.'" ');
       $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
    
      public function listar_telefono() {
       $consulta = $this->db->prepare('Select telefono_celular  from contacto ');
       $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
    
      public function listar_direccion() {
       $consulta = $this->db->prepare('call sp_listar_direccion ');
       $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }
    
    
}
