<?php
class DatosEstudios{
    private $nombre; 
    private $apellido; 
    private $direccion; 
    private $edad;
    private $sexo; 
    private $estudios; 
    
    public function __construct($nombre,$apellido,$direccion,$edad,$sexo,$estudios){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->direccion=$direccion; 
        $this->edad=$edad;
        $this->sexo=$sexo; 
        $this->estudios=$estudios; 
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

    public function getSexo(){
        return $this->sexo; 
    }// fin getEdad

    public function getEstudios(){
        return $this->estudios; 
    }// fin getEdad


}// fin clase 


?>