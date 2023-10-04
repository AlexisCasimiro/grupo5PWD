<?php
    class Marca{
        private $nombreMarca;
        private $idMarca;
        private $mensaje;

        // constructor
        public function __construct()
        {
            $this->nombreMarca="";
            $this->idMarca=0;
            $this->mensaje="";
        }// fin constructor 

        // METODO SETEAR
        public function setear($idMarca,$nombreMarca){
            $this->setidMarca($idMarca);
            $this->setnombreMarca($nombreMarca);

        }// fin setear

        // METODOS GET
        public function getnombreMarca(){
            return $this->nombreMarca; 
        }
        public function getidMarca(){
            return $this->idMarca; 
        }
        public function getMensaje(){
            return $this->mensaje; 
        }
        

        // METODOS SET
        public function setnombreMarca($name){
            $this->nombreMarca=$name;
        }
        public function setidMarca($nro){
            $this->idMarca=$nro;
        }
        public function setMensaje($msj){
            $this->mensaje=$msj;
        }

        // METODO CARGAR
        public function cargar(){
            $resp=false;
            $base=new BaseDatos();
            $sql="SELECT * FROM Marca WHERE idMarca=".$this->getidMarca();  
            if($base->Iniciar()){
                $res=$base->Ejecutar($sql);
                if($res>-1){
                    if($res>0){
                        $row=$base->Registro();
                        $this->setear($row["idMarca"],$row["nombreMarca"]);
                        $resp=true; 

                    }
                }
            }
            else{
                $this->setMensaje("Marca -> ".$base->getError());
            }
            return $resp; 
        }// fin function cargar            

        
        // METODO INSERTAR 
        public function insertar(){
            $resp=false;
            $base=new BaseDatos();
            $sql="INSERT INTO Marca (idMarca,nombreMarca) 
            VALUES (".$this->getidMarca()."','".$this->getnombreMarca()."')";
            if($base->Iniciar()){
                if($elid=$base->Ejecutar($sql)){
                    $this->setidMarca($elid); 
                    $resp=true;

                }
                else{
                    $this->setMensaje("Marca -> insertar ".$base->getError());
                }

            }
            else{
                $this->setMensaje("Marca -> Insertar".$base->getError());
            }
            return $resp;

        }// fin insertar

        // METODO MODIFICAR
        public function modificar(){
            $resp=false; 
            $base=new BaseDatos();
            $sql="UPDATE Marca SET nombreMarca='".$this->getnombreMarca()."' WHERE idMarca=".$this->getidMarca();
            if($base->Iniciar()){
                if($base->Ejecutar($sql)){
                    $resp=true;
                }
                else{
                    $this->setMensaje("Marca -> Modificar".$base->getError());
                }
            }
            else{
                $this->setMensaje("Marca -> Modificar".$base->getError());
            }
            return $resp;
        }// fin modificar


        // METODO ELIMINAR 
        public function eliminar(){
            $resp=false;
            $base=new BaseDatos();
            $sql="DELETE FROM Marca WHERE idMarca=".$this->getidMarca()."";
            if($base->Iniciar()){
                if($base->Ejecutar($sql)){
                    $resp=true;
                }
                else{
                    $this->setMensaje("Marca -> Eliminar ".$base->getError());
                }
                
            }
            else{
                $this->setMensaje("Marca -> Eliminar ".$base->getError());
            }
            return $resp;
        }// fin eliminar

        // METODO LISTAR
        public static function listar($parametro=""){
            $arreglo=array();
            $base=new BaseDatos();
            $sql="SELECT * FROM Marca ";
            if($parametro!=""){
                $sql.='WHERE '.$parametro;
            }
            $res=$base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    while($row=$base->Registro()){
                        $obj=new Marca();
                        $obj->setear($row["idMarca"],$row["nombreMarca"]);
                        array_push($arreglo,$obj);
                    }
                }
            }
            return $arreglo; 
        }// fin listar

    }// fin clase 
  
?>