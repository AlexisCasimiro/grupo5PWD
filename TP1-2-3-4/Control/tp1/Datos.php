<?php
    class Datos{
        private $nombre; 
        private $apellido; 
        private $direccion; 
        private $edad;
        
        public function __construct($nombre,$apellido,$direccion,$edad){
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->direccion=$direccion; 
            $this->edad=$edad;
        }// fin function 
    
        public function getNombre(){
            return $this->nombre; 
        }// fin getNombre
    
            public function getApellido(){
            return $this->apellido; 
        }// fin getApellido
    
            public function getDireccion(){
            return $this->direccion; 
        }// fin getDireccion
    
            public function getEdad(){
            return $this->edad; 
        }// fin getEdad
    
    
    }// fin clase 
?>