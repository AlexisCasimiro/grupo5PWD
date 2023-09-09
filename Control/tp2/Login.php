<?php

    class verificarPass{
        private $usuario;
        private $pass;

        // DATOS GUARDADOS
        private function datos(){
            $passGuardados[0]["usuario"]="pablo";
            $passGuardados[0]["clave"]="12345678A";
            $passGuardados[1]["usuario"]="tamara";
            $passGuardados[1]["clave"]="789B";
            $passGuardados[2]["usuario"]="jose";
            $passGuardados[2]["clave"]="741R";
            $passGuardados[3]["usuario"]="mia";
            $passGuardados[3]["clave"]="197N";
            $passGuardados[4]["usuario"]="tomas";
            $passGuardados[4]["clave"]="000W";

            return $passGuardados; 
        }// fin function

        public function __construct($user,$pass)
        {
            $this->usuario=$user;
            $this->pass=$pass;
            
        }

        public function getUser(){
            return $this->usuario;
        }// fin get

        public function getPass(){
            return $this->pass; 
        }// fin get

        /**
         * findUser
         * @return boolean
         */
        public function findUser(){
            $encontrado=false; 
            $cont=0;
            $datosGuardados=$this->datos();

            for($i=0; $i<count($this->datos()); $i++){
                foreach($datosGuardados[$i] as $dato=>$valor){
                    if($valor==$this->getUser() || $valor==$this->getPass()){
                        $cont++;

                    }// fin if

                }// fin for
                if($cont==2){
                    $encontrado=true; 
                }// fin if 
                $cont=0; 

            }// fin for 

            return $encontrado; 
            

        }// fin function



    }// fin clase 
?>