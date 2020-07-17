<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteController
 *
 * @author Usuario
 */
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
