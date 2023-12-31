<?php
class Auto{

    private $patente;
    private $marca;
    private $modelo;
    private $objPersona;
    private $mensaje; 

    // Constructor
    public function __construct()
    {
        $this->patente="";
        $this->marca="";
        $this->modelo="";
        $this->objPersona = new Persona();
        
    }//  fin cinstructor

    public function setear($patente,$marca,$modelo,$objPersona){
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setobjPersona($objPersona);
    }// fin function 

    //  METODO GET
    public function getPatente(){
        return $this->patente; 
    }

    public function getMarca(){
        return $this->marca; 
    }
    public function getModelo(){
        return $this->modelo; 
    }

    public function getobjPersona(){
        return $this->objPersona; 
    }

    public function getMensaje(){
        return $this->mensaje;
    }// fin mensaje


    //  METODO SET
    public function setPatente($p){
        $this->patente=$p;
    }

    public function setMarca($marca){
        $this->marca=$marca;
    }

    public function setModelo($modelo){
        $this->modelo=$modelo;
    }

    public function setobjPersona($dni){
        $this->objPersona=$dni;
    }

    public function setMensaje($mensaje){
        $this->mensaje=$mensaje;
    }// fin 


    

    // METODO CARGAR
    /**
     * @return boolean
     */
    public function cargar(){
        $resp=false; 
       $base=new BaseDatos();
       $sql="SELECT * FROM auto WHERE Patente='".$this->getPatente()."'";
       if($base->Iniciar()){
        $res=$base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                $row=$base->Registro();
                $objPersona=new Persona(); // creo al obj persona
                $objPersona->setDni($row['DniDuenio']); // seteo su dni 
                $objPersona->cargar();  // cargo a la persona con los demas datos de la persona (cargar de la clase Persona) 
                $this->setear($row["Patente"],$row["Marca"],$row["Modelo"],$objPersona);
                $resp=true; 
            }// fin if 
        }// fin if
       }// fin if 
       else{
        $this->setMensaje(" Auto ->".$base->getError());
       }

       return $resp; 

    }// fin function cargar



    
    // FUNCION INSERTAR 
    /**
     * @return boolean
     */
    public function insertar(){
        $resp=false;
        $base=new BaseDatos();
        $sql="INSERT INTO auto(Patente,Marca,Modelo,DniDuenio) VALUES('".$this->getPatente()."','".$this->getMarca()."',
        '".$this->getModelo()."',".$this->getobjPersona()->getDni().");";
        if($base->Iniciar()){
            if($elid=$base->Ejecutar($sql)){
                $this->setPatente($elid);// id 
                $resp=true;
            }    
            else{
                $this->setMensaje("Auto -> insertar ".$base->getError());
            }

        }// fin if 
        else{
            $this->setMensaje("Auto -> Insertar ".$base->getError());
        }
        return $resp; 

    }// fin function insertar
    


    // FUNCION MODIFICAR 
    /**
     * @return boolean
     */
    public function modificar(){
        $res=false;
        $base=new BaseDatos();
        $sql="UPDATE auto SET Marca='".$this->getMarca()."', Modelo='".$this->getModelo()."', DniDuenio='".$this->getobjPersona()->getDni()."' WHERE Patente='".$this->getPatente()."'";
        if($base->Iniciar()){
            if($base->Ejecutar($sql)){
                $res=true;
            }
            else{
                $this->setMensaje("Auto -> Modificar ".$base->getError());
            }        
        }
        else{
            $this->setMensaje("Auto -> Modificar".$base->getError());
        }

        return $res; 
    }// fin modificar



    // FUNCION ELIMINAR 
    /**
     * @return boolean
     */
    public function eliminar(){
        $res=false; 
        $base=new BaseDatos();
        $sql="DELETE FROM auto WHERE Patente='".$this->getPatente()."'";
        if($base->Iniciar()){
            if($base->Ejecutar($sql)){
                $res=true;
            }
            else{
                $this->setMensaje("Eliminar -> ".$base->getError());
            }
        }
        else{
            $this->setMensaje("Eliminar -> ".$base->getError());
        }
        return $res;
    }// fin eliminar


    // FUNCION LISTAR
    /**
     * @return array
     */
    public static function listar($parametro=""){
        $arreglo=array ();
        $base=new BaseDatos();
        
        $sql="SELECT * FROM auto";
        if($parametro!=""){
            $sql.=' WHERE '.$parametro;
            
        }
        $res=$base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                while($row=$base->Registro()){
                    $obj=new Auto();
                    $objPersona = new Persona();
                    $objPersona->setDni($row["DniDuenio"]);
                    $objPersona->cargar(); 
                    $obj->setear($row["Patente"],$row["Marca"],$row["Modelo"],$objPersona);
                    array_push($arreglo,$obj); // carga el obj en el array 
                    
                }
            }
        }
        else{
            //$this->setMensaje("Auto -> listar".$base->getError());
        }
        return $arreglo; 
    }// fin function 


}// fin clase 

   
?>