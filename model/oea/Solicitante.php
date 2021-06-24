/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Solicitante
    {

    //VARIABLES
        private $fechaSolicitud;
        private $tipoDocumentoIdentificacion;
        private $numeroDocumentoIdentificacion;
        private $nombreRazonSocial;
        private $domicilioFiscal;
        private $domicilio;
        private $correoElectronico;
        private $telefono;
        private $tipoOperador;
        private $Articulo = [];

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of fechaSolicitud
         */

        public function getFechaSolicitud()
        {
            return $this->fechaSolicitud;
        }

        /**
         * Set the value of fechaSolicitud
         *
         * @return  self
         */

        public function setFechaSolicitud($fechaSolicitud)
        {
            $this->fechaSolicitud = $fechaSolicitud;

            return $this;
        }

        /**
         * Get the value of tipoDocumentoIdentificacion
         */

        public function getTipoDocumentoIdentificacion()
        {
            return $this->tipoDocumentoIdentificacion;
        }

        /**
         * Set the value of tipoDocumentoIdentificacion
         *
         * @return  self
         */

        public function setTipoDocumentoIdentificacion($tipoDocumentoIdentificacion)
        {
            $this->tipoDocumentoIdentificacion = $tipoDocumentoIdentificacion;

            return $this;
        }

        /**
         * Get the value of numeroDocumentoIdentificacion
         */

        public function getNumeroDocumentoIdentificacion()
        {
            return $this->numeroDocumentoIdentificacion;
        }

        /**
         * Set the value of numeroDocumentoIdentificacion
         *
         * @return  self
         */

        public function setNumeroDocumentoIdentificacion(
            $numeroDocumentoIdentificacion
        ) {
            $this->numeroDocumentoIdentificacion = $numeroDocumentoIdentificacion;

            return $this;
        }

        /**
         * Get the value of nombreRazonSocial
         */

        public function getNombreRazonSocial()
        {
            return $this->nombreRazonSocial;
        }

        /**
         * Set the value of nombreRazonSocial
         *
         * @return  self
         */

        public function setNombreRazonSocial($nombreRazonSocial)
        {
            $this->nombreRazonSocial = $nombreRazonSocial;

            return $this;
        }

        /**
         * Get the value of domicilioFiscal
         */

        public function getDomicilioFiscal()
        {
            return $this->domicilioFiscal;
        }

        /**
         * Set the value of domicilioFiscal
         *
         * @return  self
         */

        public function setDomicilioFiscal($domicilioFiscal)
        {
            $this->domicilioFiscal = $domicilioFiscal;

            return $this;
        }

        /**
         * Get the value of domicilio
         */

        public function getDomicilio()
        {
            return $this->domicilio;
        }

        /**
         * Set the value of domicilio
         *
         * @return  self
         */

        public function setDomicilio($domicilio)
        {
            $this->domicilio = $domicilio;

            return $this;
        }

        /**
         * Get the value of correoElectronico
         */

        public function getCorreoElectronico()
        {
            return $this->correoElectronico;
        }

        /**
         * Set the value of correoElectronico
         *
         * @return  self
         */

        public function setCorreoElectronico($correoElectronico)
        {
            $this->correoElectronico = $correoElectronico;

            return $this;
        }

        /**
         * Get the value of telefono
         */

        public function getTelefono()
        {
            return $this->telefono;
        }

        /**
         * Set the value of telefono
         *
         * @return  self
         */

        public function setTelefono($telefono)
        {
            $this->telefono = $telefono;

            return $this;
        }

        /**
         * Get the value of tipoOperador
         */

        public function getTipoOperador()
        {
            return $this->tipoOperador;
        }

        /**
         * Set the value of tipoOperador
         *
         * @return  self
         */

        public function setTipoOperador($tipoOperador)
        {
            $this->tipoOperador = $tipoOperador;

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