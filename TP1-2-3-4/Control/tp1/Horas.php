<?php
    class Horas{
        private $cantHoras; 

        public function __construct($horas)
        {
            $this->cantHoras=$horas;

        }// fin constructor 

        public function getHoras(){
           return $this->cantHoras;
        }// fin function 

        /**
         * Calcula las horas a la semana de la materia PWD
         * @return int
         */
        public function horasTotales(){
            $claves=["lunes","martes","miercoles","jueves","viernes"];
            $cantHoras =0; 

            for ($i=0; $i<count($this->getHoras()); $i++){
                $cantHoras+=$this->getHoras()[$claves[$i]];
            }// fin for 

            return $cantHoras; 


        }// fin function 
    }// fin clase 

?>