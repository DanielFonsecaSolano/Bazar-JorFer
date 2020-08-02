<?php
class InformacionController {

    public function __construct() {
        $this->view = new View();
    }

    public function menuInformacion() {
        require 'model/data/InformacionDato.php';
        $items = new InformacionDato();
        $listado["listado"]=$items->listarInformacion();
        $this->view->show("menuInformacion.php",$listado);
    }
    
    
  
    public function modificarInformacion() {
        require 'model/data/InformacionDato.php';
        $items = new InformacionDato();
        $items->modificarInformacion($_POST["nombre"], $_POST["cedula"], $_POST["edad"], $_POST["idInformacion"]);
        $dato = $items->filtrarClient($_POST["idInformacion"]);
        $this->view->show("filtrarInformacion.php", $dato);
    }

    public function listInformacion() {
        require 'model/data/InformacionDato.php';
        $items = new InformacionDato();
        $dato["listado"] = $items->filtrarClient($_GET["idInformacion"]);
        $this->view->show("modificarInformacion.php", $dato);
    }



}

//fin
// fin clase
?>

