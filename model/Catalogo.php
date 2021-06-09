<?php

    class Catalogo{

        private $idCatalogo;
        private $nombre;
        private $descripcion;
        private $estado;

        public function __construct()
        {

        }

        

        /**
         * Get the value of idCatalogo
         */ 
        public function getIdCatalogo()
        {
                return $this->idCatalogo;
        }

        /**
         * Set the value of idCatalogo
         *
         * @return  self
         */ 
        public function setIdCatalogo($idCatalogo)
        {
                $this->idCatalogo = $idCatalogo;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }
    }

?>