<?php
    require_once('core/db_abstract_model.php');
    class SolicitudM extends DBAbstractModel{

        public function __construct(){

        }

        /*
        Método para devuelve registros de usuarios
        */
        public function obtenerUsuarios(){
            $this->query="SELECT * FROM usuario";
            $this->get_results_from_query();
            if(count($this->rows) > 0){
               
                return [
                    "datos"=>$this->rows

                ];
            }
        }
   
    }

?>