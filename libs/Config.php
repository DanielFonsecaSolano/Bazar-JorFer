<?php

class Config {
    private $vars;
    private static $instance;
    
    private function __construct() {
        $this->vars = array();
    }//constructor
    
    public function set($nombreAtributo, $valor){
        if(!isset($this->vars[$nombreAtributo])){//isset verifica si esta definido
            $this->vars[$nombreAtributo] = $valor;
        }//if
    }//set
    
    public function get($nombreAtributo){
        if(isset($this->vars[$nombreAtributo])){
            return $this->vars[$nombreAtributo];
        }//if
    }//get
    
    public static function singleton(){
        if(!isset(self::$instance)){
            $tempClass = __CLASS__;//clase temporal igualada a esta clase
            self::$instance = new $tempClass;//se crea la instancia
            
        }//if
        return self::$instance;
    }//singleton
}//fin clase
