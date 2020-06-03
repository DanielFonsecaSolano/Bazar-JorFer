<?php
    class DefaultController{
        
        private $view;
        
        public function __construct() {
            $this->view = new View();
        }//constructor
        
        public function accionDefault(){
            $this->view->show("indexView.php");
        }//accionDefault
    }// fin de clase
?>