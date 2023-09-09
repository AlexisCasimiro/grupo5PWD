<?php

class operacion{
    private $nro1;
    private $nro2;
    private $operacion;

    public function __construct($num1,$num2,$operacion)
    {
        $this->nro1=$num1;
        $this->nro2=$num2;        
        $this->operacion=$operacion;
    }// fin constructor

    public function getNro1(){
        return $this->nro1;
    }// fin getNro1

    public function getNro2(){
        return $this->nro2;
    }// fin getNro2

    public function getOperacion(){
        return $this->operacion;
    }// fin getOperacion


    public function resolucion(){
        $resultado=0;
        $operacion=strtolower($this->getOperacion()); 
        switch($operacion){
            case "suma":
                $resultado=$this->getNro1()+$this->getNro2();
                break;
            case "resta":
                $resultado=$this->getNro1() - $this->getNro2();
                break;
            case "multiplicacion":
                $resultado=$this->getNro1()*$this->getNro2();
                break;    

        }// fin switch

        return $resultado;
    }
}