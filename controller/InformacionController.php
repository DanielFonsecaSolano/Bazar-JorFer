<?php

class InformacionController {

    public function __construct() {
        $this->view = new View();
    }

    public function SobreNosotrosView() {
        $this->view->show("Item/SobreNosotros.php");
    }
    public function modificarInformacion() {
        require 'model/data/InformacionDato.php';
        $items = new InformacionData();
        $items->modificarInformacion($_POST["nombre"], $_POST["cedula"], $_POST["edad"], $_POST["idInformacion"]);
        $dato = $items->listarInformacion($_POST["idInformacion"]);
        $this->view->show("modificarInformacion.php", $dato);
    }
    public function editarInformacion() {
        require 'model/data/InformacionDato.php';
        $items = new InformacionData();
        $dato["listado"] = $items->listarInformacion($_GET["idInformacion"]);
        $this->view->show("Item/SobreNosotros.php", $dato);
    }
    public function listarInformacion() {
        require 'model/data/InformacionData.php';
        $items = new InformacionData();
        //$_GET["idInformacion"]
        $dato["listado"] = $items->listarInformacion();
        $this->view->show("Item/SobreNosotros.php", $dato);
    }

}

//fin
// fin clase
?>

