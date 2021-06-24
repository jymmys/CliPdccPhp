/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class ManifiestoCargaCrearRq
    {
        //VARIABLES
        private $Manifiesto;
        private $MedioTransporte;
        private $Contenedor;
        private $ConocimientoEmbarque;
        private $estado;
        private $Articulo = array();

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of Manifiesto
         */
        public function getManifiesto()
        {
            return $this->Manifiesto;
        }

        /**
         * Set the value of Manifiesto
         *
         * @return  self
         */
        public function setManifiesto($Manifiesto)
        {
            $this->Manifiesto = $Manifiesto;

            return $this;
        }

        /**
         * Get the value of MedioTransporte
         */
        public function getMedioTransporte()
        {
            return $this->MedioTransporte;
        }

        /**
         * Set the value of MedioTransporte
         *
         * @return  self
         */
        public function setMedioTransporte($MedioTransporte)
        {
            $this->MedioTransporte = $MedioTransporte;

            return $this;
        }

        /**
         * Get the value of Contenedor
         */
        public function getContenedor()
        {
            return $this->Contenedor;
        }

        /**
         * Set the value of Contenedor
         *
         * @return  self
         */
        public function setContenedor($Contenedor)
        {
            $this->Contenedor = $Contenedor;

            return $this;
        }

        /**
         * Get the value of ConocimientoEmbarque
         */
        public function getConocimientoEmbarque()
        {
            return $this->ConocimientoEmbarque;
        }

        /**
         * Set the value of ConocimientoEmbarque
         *
         * @return  self
         */
        public function setConocimientoEmbarque($ConocimientoEmbarque)
        {
            $this->ConocimientoEmbarque = $ConocimientoEmbarque;

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

        /**
         * Get the value of Articulo
         */
        public function getArticulo()
        {
            return $this->Articulo;
        }

        /**
         * Set the value of Articulo
         *
         * @return  self
         */
        public function setArticulo($Articulo)
        {
            $this->Articulo = $Articulo;

            return $this;
        }
    }
        
?>

