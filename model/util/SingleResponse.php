<?php

    require_once("Response.php");

    class SingleResponse extends Response{

        private $codigo;
        private $descripcion;

        public function __construct()
        {

        }

        public function __construct3($codigo,$descripcion)
        {
            $this->codigo=$codigo;
            $this->descripcion=$descripcion;
        }

    }

?>