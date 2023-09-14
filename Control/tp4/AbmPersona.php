<?php
    class AbmPersona{

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return $obj
     */
    private function cargarObjeto($param){
        $obj = null;
           
        if( array_key_exists('NroDni',$param) and array_key_exists('Apellido',$param) and array_key_exists('Nombre',$param) and array_key_exists('fechaNac',$param) and array_key_exists('Telefono',$param) and array_key_exists('Domicilio',$param)){
            $obj = new Persona(); // llama a la capa modelo 
            $obj->setear($param["NroDni"],$param["Apellido"],$param["Nombre"],$param["fechaNac"],$param["Telefono"],$param["Domicilio"]);

        }
        return $obj;
    }// fin cargarObjeto

    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return $obj
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['NroDni']) ){
            $obj = new Persona();
            $obj->setear($param['NroDni'], null,null,null,null,null);
        }
        return $obj;
    }// fin function cargarObjetoConClave


    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
     private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['NroDni']))
            $resp = true;
        return $resp;
    }// fin seteadoCamposClaves

    /**
     * METODO ALTA PERSONA
     * @param array $param
     * @return boolean
     */
    public function alta($param){
        $resp = false;
        $param['NroDni'] =null;
        $elObjtPersona = $this->cargarObjeto($param);
        if ($elObjtPersona!=null and $elObjtPersona->insertar()){
            $resp = true;
        }
        return $resp;
        
    } // fin function alta

    /**
     * METODO ELIMINAR PERSONA 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjPersona = $this->cargarObjetoConClave($param);
            if ($elObjPersona!=null and $elObjPersona->eliminar()){
                $resp = true;
            }
        } 
        return $resp;
    }// fin functio baja
        
    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjPersona = $this->cargarObjeto($param);
            if($elObjPersona!=null and $elObjPersona->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }// fin function modificacion


    /**
     * permite buscar un objeto
     * @param array $param
     * @return array
     */
    public function buscar($param){
        $where =" true ";
        if ($param<>NULL){
            if  (isset($param['NroDni']))
                $where.=" and NroDni = '".$param['NroDni']."'";
            if  (isset($param['Apellido']))
                 $where.=" and Apellido = '".$param['Apellido']."'";
            if  (isset($param['Nombre']))
                 $where.=" and Nombre = '".$param['Nombre']."'";
            if  (isset($param['fechaNac']))
                 $where.=" and fechaNac = '".$param['fechaNac']."'";
            if  (isset($param['Telefono']))
                 $where.=" and Telefono = '".$param['Telefono']."'";
            if  (isset($param['Domicilio']))
                 $where.=" and Domicilio = '".$param['Domicilio']."'";                    
        }// fin if <> null
        $arreglo = Persona::listar($where);  
        return $arreglo;
    }// fin function buscar


    }// fin clase 

?>