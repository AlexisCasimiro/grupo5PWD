<?php

class Cinema{
    private $nombre;
    private $actores;
    private $director;
    private $guion;
    private $produccion;
    private $anio;
    private $nacionalidad;
    private $genero;
    private $duracion;
    private $restriccion;
    private $sinopsis;
    private $imagen; 
    
    public function __construct($nombre,$actores,$director,$guion,$produccion,$anio,$nacionalidad,$genero,$duracion,$restriccion,$sinopsis,$imagen){
        $this->nombre=$nombre;
        $this->actores=$actores;
        $this->director=$director;
        $this->guion=$guion;
        $this->produccion=$produccion;
        $this->anio=$anio;
        $this->nacionalidad=$nacionalidad;
        $this->genero=$genero;
        $this->duracion=$duracion;
        $this->restriccion=$restriccion;
        $this->sinopsis=$sinopsis;
        $this->imagen=$imagen;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getActores(){
        return $this->actores;
    }
    public function getDirector(){
        return $this->director;
    }
    public function getGuion(){
        return $this->guion;
    }
    public function getProduccion(){
        return $this->produccion;
    }
    public function getAnio(){
        return $this->anio;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function getDuracion(){
        return $this->duracion;
    }
    public function getNacionalidad(){
        return $this->nacionalidad;
    }
    public function getRestriccion(){
        return $this->restriccion;
    }
    public function getSinopsis(){
        return $this->sinopsis;
    }
    public function getImagen(){
        return $this->imagen; 
    }


    /**
     * VERIFICAIMAGEN
     *  @return boolean
     */
    public function verificaImagen(){
        $salida=false;
        $nombre=explode(".",$this->getImagen()["name"]);
        $extension =strtolower(end($nombre));
        if($extension=="jpeg" || $extension=="jpg" || $extension=="png"){
            $salida=true; 
        }// fin if 

        return $salida; 

    }// fin function 

    /**
     * cargarImagen
     * @return array
     */
    public function cargarImagen(){
        $respuesta["exitoCarga"]=false;
        $respuesta["exitoExtension"]=false;
        $respuesta["path"]="";
        $target_dir='../../../control/tp3/imagen/';
        $target_file=$target_dir.$this->getImagen()['name'];  // especifica el camino dle archivo a subir 
        $respuesta["path"]=$target_file;
        $extensionImagen=$this->verificaImagen(); 

        if($extensionImagen){
            $respuesta["exitoExtension"]=true; 
            //var_dump(!file_exists($target_dir));
            // "../../../control/tp3/";//'uploads/'
            if(!file_exists($target_dir)){
                mkdir($target_dir,0777); 
            }// fin if 

            if(copy($this->getImagen()["tmp_name"],$target_file)){
                $respuesta["exitoCarga"]=true;
                //$respuesta["mensaje"]="La imagen se subio correctamente";

            }// fin if 
        
        
        }// fin if  

        return $respuesta;

    }// fin function




}// fin clase Pelicula