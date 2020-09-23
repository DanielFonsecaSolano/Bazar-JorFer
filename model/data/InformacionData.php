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
class InformacionData {

    protected $db;

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }

    public function modificarInformacion($idInformacion, $horario, $numeroTelefonico, $correoElectronico, $acercaDeNosotros) {
        $data = array($idInformacion, $horario, $numeroTelefonico, $correoElectronico, $acercaDeNosotros);
        $consulta = $this->db->prepare('CALL sp_modificar_informacion(?,?,?,?) ');
        $consulta->execute($data);
        echo $consulta->errorInfo()[2];
    }

    public function listarInformacion() {
        $consulta = $this->db->prepare('call sp_listar_informacion(1) ');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }

}
