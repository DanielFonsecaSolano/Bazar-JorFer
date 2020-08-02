<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of categoriaDato
 *
 * @author dfonse
 */
class InformacionDato {

    protected $db;

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }

 

        public function modificarInformacion($idInformacion,$horario,$numeroTelefonico, $correoElectronico,$acercaDeNosotros) {
        $data = array($idInformacion,$horario, $numeroTelefonico, $correoElectronico,$acercaDeNosotros);
        $consulta = $this->db->prepare('CALL modificarInformacion(?,?,?,?) ');
        $consulta->execute($data);
        echo $consulta->errorInfo()[2];
    }


    public function listarInformacion() {
        $consulta = $this->db->prepare('CALL listarInformacion()');
         $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }



}

