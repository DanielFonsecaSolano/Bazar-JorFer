<?php

class AdminController {
    //put your code here
    
      public function __construct() {
        $this->view = new View();
    }
    
    
      public function menu_principal() {
        $this->view->show("Admin/MenuPrincipal.php");
    } 
    
    
}