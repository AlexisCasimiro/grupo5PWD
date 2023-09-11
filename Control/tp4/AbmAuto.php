<?php

    class AbmAuto{

        /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return obj
     */
    private function cargarObjeto($param){
        $obj = null;
           
        if( array_key_exists('Patente',$param) and array_key_exists('Marca',$param) and array_key_exists('Modelo',$param) and array_key_exists('DniDuenio',$param)){
            $obj = new Auto(); // llama a la capa modelo 
            $obj->setear($param["Patente"],$param["Marca"],$param["Modelo"],$param["DniDuenio"]);

        }
        return $obj;
    }// fin cargarObjeto

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return obj
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['Patente']) ){
            $obj = new Persona();
            $obj->setear($param['Patente'], null,null,null,null,null);
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
        if (isset($param['Patente']))
            $resp = true;
        return $resp;
    }// fin seteadoCamposClaves


        /**
     * METODO ALTA PERSONA
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        $param['Patente'] =null;
        $elObjAuto = $this->cargarObjeto($param);
        if ($elObjAuto!=null and $elObjAuto->insertar()){
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
            $elObjAuto = $this->cargarObjetoConClave($param);
            if ($elObjAuto!=null and $elObjAuto->eliminar()){
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
            $elObjAuto = $this->cargarObjeto($param);
            if($elObjAuto!=null and $elObjAuto->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }// fin function modificacion


        /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param){
        $where =" true ";
        if ($param<>NULL){
            if  (isset($param['Patente']))
                $where.=" and Patente =".$param['Patente'];
            if  (isset($param['Marca']))
                 $where.=" and Marca ='".$param['Marca']."'";
            if  (isset($param['modelo']))
                 $where.=" and Modelo ='".$param['Modelo']."'";
            if  (isset($param['DniDuenio']))
                 $where.=" and DniDuenio ='".$param['DniDuenio']."'";                  
        }// fin if <> null
        $arreglo = Persona::listar($where);  
        return $arreglo;
    }// fin function buscar


    }// fin clase 

?>