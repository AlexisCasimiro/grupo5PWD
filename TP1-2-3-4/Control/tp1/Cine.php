<?php
class Cine {
    private $edad;
    private $estudiante; 

    public function __construct($edad,$estudiante)
    {
        $this->edad=$edad;
        $this->estudiante=$estudiante;
        
    }// fin constructor

    public function getEdad(){
        return $this->edad; 

    }// fin getEdad

    public function getEstudiante(){
        return $this->estudiante; 
    }// fin getEstudiante

    /**
     * calcular precio
     * @return float
     */
    public function calcularPrecio(){
        $precio=0;
        $edad=intval($this->getEdad());
        $respuesta=strtolower($this->getEstudiante());

        $estudiante=($respuesta=="si")? true: false;

        if($estudiante || $edad<12){
            $precio=160;

        }// fin if
        if($estudiante && $edad>=12){
            $precio=180;

        }// fin elseif
        else{
            $precio=300;

        }// fin else

        return $precio; 


    }// fin funtion




}// fin clase entrada 

?>