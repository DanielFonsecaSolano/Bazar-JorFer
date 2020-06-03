<?php

class View {
    public function __construct() {
        ;
    }//constructor
    
    public function show($nombreVista, $vars=array()){
        $config = Config::singleton();
        $path = $config->get('viewFolder').$nombreVista;
        if(is_file($path) == FALSE){
            trigger_error('Pagina '.$path.' no existe', E_USER_NOTICE);
            return FALSE;
        }//if
        if(is_array($vars)){
            foreach ($vars as $key=>$value){//for que convierte el array a un key->value(diccionario)
                $key = $value;
            }//foreach
        }//if (is_array($vars))
        include $path;
    }//show
}//fin de clase
