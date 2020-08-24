<?php


class ClienteController {
    //put your code here
    
      public function __construct() {
        $this->view = new View();
    }
    
    
    
        public function menu_principal() {
        $this->view->show("Cliente/MenuPrincipal.php");
    }
      public function contactoView() {
        $this->view->show("Cliente/Contacto.php");
    }

}
