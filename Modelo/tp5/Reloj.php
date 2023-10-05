<?php
class Reloj{

    private $idReloj;
    private $nombreReloj;
    private $objTipo;
    private $objMarca;
    private $precio;
    private $stock; 
    private $mensaje; 

    // Constructor
    public function __construct()
    {
        $this->idReloj="";
        $this->nombreReloj="";
        $this->stock=0;
        $this->objTipo = new Tipo();
        $this->objMarca = new Marca();
        $this->precio = 0;
        
    }//  fin cinstructor

    public function setear($idReloj,$nombreReloj,$precio,$stock,$objTipo,$objMarca){
        $this->setidReloj($idReloj);
        $this->setnombreReloj($nombreReloj);
        $this->setobjTipo($objTipo);
        $this->setobjMarca($objMarca);
        $this->setprecio($precio);
        $this->setstock($stock);
    }// fin function 

    //  METODO GET
    public function getidReloj(){
        return $this->idReloj; 
    }

    public function getnombreReloj(){
        return $this->nombreReloj; 
    }
    public function getobjTipo(){
        return $this->objTipo; 
    }

    public function getobjMarca(){
        return $this->objMarca; 
    }

    public function getprecio(){
        return $this->precio; 
    }
    public function getstock(){
        return $this->stock; 
    }
    public function getMensaje(){
        return $this->mensaje;
    }// fin mensaje


    //  METODO SET
    public function setidReloj($p){
        $this->idReloj=$p;
    }

    public function setnombreReloj($nombreReloj){
        $this->nombreReloj=$nombreReloj;
    }

    public function setobjTipo($objTipo){
        $this->objTipo=$objTipo;
    }

    public function setobjMarca($obj){
        $this->objMarca=$obj;
    }

    public function setprecio($p){
        $this->precio=$p;
    }
    public function setstock($cant){
        $this->stock=$cant;
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
       $base->setBaseDatos("relojes");
       $sql="SELECT * FROM reloj WHERE idReloj='".$this->getidReloj()."'";
       if($base->Iniciar()){
        $res=$base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                $row=$base->Registro();
                $objTipo=new Tipo(); // creo al obj 
                $objTipo->setidTipo($row['idTipo']); // seteo su id 
                $objTipo->cargar(); 
                $objMarca=new Marca(); // creo al obj
                $objMarca->setidMarca($row['idMarca']); // seteo su id 
                $objMarca->cargar(); 
                // setear($idReloj,$nombreReloj,$precio,$stock,$objTipo,$objMarca)
                $this->setear($row["idReloj"],$row["nombreReloj"],$row["precio"],$row["stock"],$objTipo,$objMarca);
                $resp=true; 
            }// fin if 
        }// fin if
       }// fin if 
       else{
        $this->setMensaje(" Reloj ->".$base->getError());
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
        $base->setBaseDatos("relojes");
        $sql="INSERT INTO Reloj(idReloj,nombreReloj,precio,stock,idTipo,idMarca) VALUES('".$this->getidReloj()."','".$this->getnombreReloj()."',
        '".$this->getprecio()."','".$this->getstock()."','".$this->getobjTipo()->getidTipo()."',".$this->getobjMarca()->getidMarca()."',".$this->getprecio().");";
        if($base->Iniciar()){
            if($elid=$base->Ejecutar($sql)){
                $this->setidReloj($elid);// id 
                $resp=true;
            }    
            else{
                $this->setMensaje("Reloj -> insertar ".$base->getError());
            }

        }// fin if 
        else{
            $this->setMensaje("Reloj -> Insertar ".$base->getError());
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
        $base->setBaseDatos("relojes");
        $sql="UPDATE reloj SET nombreReloj='".$this->getnombreReloj()."', precio='".$this->getprecio()."', stock='".$this->getstock()."'
        , objTipo='".$this->getobjTipo()->getidTipo()."'
        , idMarca='".$this->getobjMarca()->getidMarca()."',
         precio='".$this->getprecio()."' WHERE idReloj='".$this->getidReloj()."'";
        if($base->Iniciar()){
            if($base->Ejecutar($sql)){
                $res=true;
            }
            else{
                $this->setMensaje("Reloj -> Modificar ".$base->getError());
            }        
        }
        else{
            $this->setMensaje("Reloj -> Modificar".$base->getError());
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
        $base->setBaseDatos("relojes");
        $sql="DELETE FROM reloj WHERE idReloj='".$this->getidReloj()."'";
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
        $base->setBaseDatos("relojes");
        
        $sql="SELECT * FROM reloj";
        if($parametro!=""){
            $sql.=' WHERE '.$parametro;
            
        }
        $res=$base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                while($row=$base->Registro()){
                    $obj=new Reloj();
                    $objTipo = new Tipo();
                    $objTipo->setidTipo($row["idTipo"]);
                    $objTipo->cargar(); 
                    $objMarca = new Marca();
                    $objMarca->setidMarca($row["idMarca"]);
                    $objMarca->cargar();
                    // setear($idReloj,$nombreReloj,$precio,$stock,$objTipo,$objMarca)
                    $obj->setear($row["idReloj"],$row["nombreReloj"],$row["precio"],$row["stock"],$objTipo,$objMarca);
                    array_push($arreglo,$obj); // carga el obj en el array 
                    
                }
            }
        }
        else{
            //$this->setMensaje("Reloj -> listar".$base->getError());
        }
        return $arreglo; 
    }// fin function 


}// fin clase 

   
?>