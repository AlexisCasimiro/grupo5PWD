<?php
class SubirArchivo{
    private $archivo;

    public function __construct($archivo){
        $this->archivo=$archivo;

    }// fin constructor 

    public function getArchivo(){
        return $this->archivo; 
    }// fin getArchivo

    /**
     * @return array
     */
    public function validacionFile(){
        $resultado["tamanio"]="";
        $resultado["tipo"]="";

        if($this->getArchivo()["error"]<=0){
             // COMPROBACION DEL TAMAÑO DEL ARCHIVO 
            $maxTam=1024*1024*2; // conversion a byte
            if($this->getArchivo()["size"]>$maxTam){
                $resultado["tamanio"]="El tamaño del archivo supera los 2Mb";
                    //echo("El archico supera el tamaño especificado <br>");
            }// fin if 

            // VERIFICACION DE LA EXTENSION DEL ARCHIVO
            $archivoCompleto=explode(".",$this->getArchivo()["name"]); // divide los string en 2, por un punto
            $extension=strtolower(end($archivoCompleto));// recupera la ultima porcion del string. En este caso tensdrá la extension
            if($extension!="docx" && $extension!="pdf"){
                $resultado["tipo"]="El archivo no es ni pdf ni docx";
              //echo("El archivo no tiene extension pdf o doc <br>");

            }// fin if 

        }// fin if 
        else{
            $resultado["tamanio"]="el archivo esta vacio";
        }// fin else
       

    return $resultado; 

    }// fin function

    /**
     * @return array
     */
    public function cargarArchivo(){
        $target_dir="../../../control/tp3/";//'uploads/';
        $target_file=$target_dir.$this->getArchivo()['name'];  // especifica el camino dle archivo a subir 
        $datosArchivo=$this->getArchivo();
       
        $datosArchivo["path"]=$target_file;
        $datosArchivo["exitoCarga"]=false; // me indica si se puedo cargar o no el archivo
        $datosArchivo["exitoTamanio"]=false;

        $salida=$this->validacionFile();
        if($salida["tamanio"]=="" && $salida["tipo"]==""){ // significa que verifica el tipo de extension y el tamaño
            $datosArchivo["exitoTamanio"]=true;
           // $datosArchivo["exitoCarga"]=true;
            if(!file_exists($target_dir)){
                mkdir($target_dir,0777);// creo la carpeta si no existe 
    
            }// fin if

            if(copy($this->getArchivo()["tmp_name"],$target_file)){ // cambia el path desde el temporal a donde quiero que se guarde el archivo
                //$datosArchivo["mensaje"]="El archivo se cargo corerctamente";
                $datosArchivo["exitoCarga"]=true;    
            }// fin if 
        
        }// fin if 

        return $datosArchivo;
    }// fin function 

}// fin clase control



?>