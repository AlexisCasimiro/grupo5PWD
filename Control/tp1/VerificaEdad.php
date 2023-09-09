<?php
class VerificaEdad{
        private $edad; 
        
        public function __construct($edad){
            $this->edad=$edad;
        }// fin cnstructor 

        public function getEdad(){
            return $this->edad; 
        }// fin function 

        /**
         * esMayor
         * @return boolean
         */
        public function esMayor(){
            $salida=false;

            if($this->getEdad()>=18){
                $salida=true; 
            }// fin if 

            return $salida; 

        }// fin function 




    }// fin class

?>