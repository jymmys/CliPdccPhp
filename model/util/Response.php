<?php


    require_once("Respuesta.php");

    abstract class Response {

        private $respuesta;
       
        public function __construct()
        {

        }
        
        public function __construct2(Respuesta $respuesta)
        {
            $this->Respuesta = $respuesta;
        }

       

        /**
         * Get the value of respuesta
         */ 
        public function getRespuesta()
        {
                return $this->respuesta;
        }

        /**
         * Set the value of respuesta
         *
         * @return  self
         */ 
        public function setRespuesta($respuesta)
        {
                $this->respuesta = $respuesta;

                return $this;
        }
    }

?>