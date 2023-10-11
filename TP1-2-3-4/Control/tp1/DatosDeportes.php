<?php
class datosDeportes{
    private $nombre; 
    private $apellido; 
    private $direccion; 
    private $edad;
    private $sexo; 
    private $estudios; 
    private $deportes; 
    
    public function __construct($nombre,$apellido,$direccion,$edad,$sexo,$estudios,$deportes){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->direccion=$direccion; 
        $this->edad=$edad;
        $this->sexo=$sexo; 
        $this->estudios=$estudios; 
        $this->deportes=$deportes;
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
    }// fin getEstudios

    public function getDeportes(){
        return $this->deportes; 
    }// fin getEstudios

    /**
     * mostrar deporte
     * @return array
     */
    public function mostrarDeportes(){
        $cont=0;
        $deporte=[];
        $longitud=count($this->getDeportes());
        for($i=0; $i<$longitud;$i++){
            if(!empty($this->getDeportes()[$i])){
                $deporte[$cont]=$this->getDeportes()[$i];
                $cont++;
            }// 

        }// fin for 

        return $deporte;

    }// fin function



}// fin clase 

?>