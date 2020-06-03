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
    
    public function CategoriaView(){
            $this->view->show("Item/Categoria.php");
    }
    
        public function loginView(){
            $this->view->show("Item/login.php");
    }
       public function sobreNosotrosView(){
            $this->view->show("Item/SobreNosotros.php");
    }
    
     public function inicioView(){
            $this->view->show("indexView.php");
    }
    public function contactoView(){
           $this->view->show("Item/Contacto.php");
    }
        public function listaProductoView(){
           $this->view->show("Item/listaProducto.php");
    }
    
       public function registrarmeView(){
           $this->view->show("Item/Registrarme.php");
    }
    
}
