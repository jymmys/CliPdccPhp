/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class TransbordoMercanciaActualizarRq
    {
        //VARIABLES
        private $Registro;
        private $Manifiesto;
        private $MedioTransporteDetalle;
        private $Contenedor;
        private $ConocimientoEmbarque;
        private $Consignatario;
        private $estado;
        private $Articulo = array();



        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of Registro
         */
        public function getRegistro()
        {
            return $this->Registro;
        }

        /**
         * Set the value of Registro
         *
         * @return  self
         */
        public function setRegistro($Registro)
        {
            $this->Registro = $Registro;

            return $this;
        }

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
         * Get the value of MedioTransporteDetalle
         */
        public function getMedioTransporteDetalle()
        {
            return $this->MedioTransporteDetalle;
        }

        /**
         * Set the value of MedioTransporteDetalle
         *
         * @return  self
         */
        public function setMedioTransporteDetalle($MedioTransporteDetalle)
        {
            $this->MedioTransporteDetalle = $MedioTransporteDetalle;

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
         * Get the value of Consignatario
         */
        public function getConsignatario()
        {
            return $this->Consignatario;
        }

        /**
         * Set the value of Consignatario
         *
         * @return  self
         */
        public function setConsignatario($Consignatario)
        {
            $this->Consignatario = $Consignatario;

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

