<?php
    include_once("../configuracion.php");

    class Persona{
        private $nombre;
        private $apellido; 
        private $fechaNacimiento;
        private $domicilio;
        private $telefono;
        private $dni;
        private $mensaje;

        // constructor
        public function __construct()
        {
            $this->nombre="";
            $this->apellido="";
            $this->fechaNacimiento="";
            $this->domicilio="";
            $this->telefono="";
            $this->dni=0;
            $this->mensaje="";
        }// fin constructor 

        // METODO SETEAR
        public function setear($dni,$apellido,$nombre,$fecha,$tel,$domicilio){
            $this->setDni($dni);
            $this->setApellido($apellido);
            $this->setNombre($nombre);
            $this->setFechaNac($fecha);
            $this->setTelefono($tel);
            $this->setDomicilio($domicilio);

        }// fin setear

        // METODOS GET
        public function getNombre(){
            return $this->nombre; 
        }
        public function getApellido(){
            return $this->apellido; 
        }
        public function getDni(){
            return $this->dni; 
        }
        public function getTelefono(){
            return $this->telefono; 
        }
        public function getDomicilio(){
            return $this->domicilio; 
        }
        public function getFechaNac(){
            return $this->fechaNacimiento; 
        }
        public function getMensaje(){
            return $this->mensaje; 
        }
        

        // METODOS SET
        public function setNombre($name){
            $this->nombre=$name;
        }
        public function setApellido($ap){
            $this->apellido=$ap;
        }
        public function setDni($nro){
            $this->dni=$nro;
        }
        public function setFechaNac($date){
            $this->fechaNacimiento=$date;
        }
        public function setDomicilio($direccion){
            $this->domicilio=$direccion;
        }
        public function setTelefono($tel){
            $this->telefono=$tel;
        }
        public function setMensaje($msj){
            $this->mensaje=$msj;
        }

        // METODO CARGAR
        public function cargar(){
            $resp=false;
            $base=new BaseDatos();
            $sql="SELECT * FROM persona WHERE NroDni=".$this->getDni();  
            if($base->Iniciar()){
                $res=$base->Ejecutar($sql);
                if($res>-1){
                    if($res>0){
                        $row=$base->Registro();
                        $this->setear($row["NroDni"],$row["Apellido"],$row["Nombre"],$row["fechaNac"],$row["Telefono"],$row["Domicilio"]);
                        $resp=true; 

                    }
                }
            }
            else{
                $this->setMensaje("Persona -> ".$base->getError());
            }
            return $resp; 
        }// fin function cargar            

        
        // METODO INSERTAR 
        public function insertar(){
            $resp=false;
            $base=new BaseDatos();
            $sql="INSERT INTO persona (NroDni,Apellido,Nombre,fechaNac,Telefono,Domicilio) 
            VALUES (".$this->getDni().",'".$this->getApellido()."','".$this->getNombre()."','".$this->getFechaNac()."','".$this->getTelefono()."','".$this->getDomicilio()."')";
            if($base->Iniciar()){
                if($elid=$base->Ejecutar($sql)){
                    $this->setDni($elid); 
                    $resp=true;

                }
                else{
                    $this->setMensaje("Persona -> insertar ".$base->getError());
                }

            }
            else{
                $this->setMensaje("Persona -> Insertar".$base->getError());
            }
            return $resp;

        }// fin insertar

        // METODO MODIFICAR
        public function modificar(){
            $resp=false; 
            $base=new BaseDatos();
            $sql="UPDATE persona SET Apellido='".$this->getApellido()."', Nombre='".$this->getNombre()."', 
            fechaNac='".$this->getFechaNac()."', Telefono='".$this->getTelefono()."', Domicilio='".$this->getDomicilio()."' WHERE NroDni=".$this->getDni();
            if($base->Iniciar()){
                if($base->Ejecutar($sql)){
                    $resp=true;
                }
                else{
                    $this->setMensaje("Persona -> Modificar".$base->getError());
                }
            }
            else{
                $this->setMensaje("Persona -> Modificar".$base->getError());
            }
            return $resp;
        }// fin modificar


        // METODO ELIMINAR 
        public function eliminar(){
            $resp=false;
            $base=new BaseDatos();
            $sql="DELETE FROM persona WHERE NroDni=".$this->getDni()."";
            if($base->Iniciar()){
                if($base->Ejecutar($sql)){
                    $resp=true;
                }
                else{
                    $this->setMensaje("Persona -> Eliminar ".$base->getError());
                }
                
            }
            else{
                $this->setMensaje("Persona -> Eliminar ".$base->getError());
            }
            return $resp;
        }// fin eliminar

        // METODO LISTAR
        public static function listar($parametro=""){
            $arreglo=array();
            $base=new BaseDatos();
            $sql="SELECT * FROM persona";
            if($parametro!=""){
                $sql.='WHERE '.$parametro;
            }
            $res=$base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    while($row=$base->Registro()){
                        $obj=new Persona();
                        $obj->setear($row["NroDni"],$row["Apellido"],$row["Nombre"],$row["fechaNac"],$row["Telefono"],$row["Domicilio"]);
                        array_push($arreglo,$obj);
                    }
                }
            }
            return $arreglo; 
        }// fin listar

    }// fin clase 
  
?>