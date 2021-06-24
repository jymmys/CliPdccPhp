/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Inscripcion
    {
            
    //VARIABLES
        private $tipoPersona;
        private $nombreRazonSocial;
        private $tipoDocumentoIdentificacion;
        private $numeroDocumentoIdentidad;
        private $domicilioFiscal;
        private $direccionNotificaciones;
        private $telefono;
        private $PersonaAutorizada;

    
        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS


        /**
         * Get the value of tipoPersona
         */
        public function getTipoPersona()
        {
            return $this->tipoPersona;
        }

        /**
         * Set the value of tipoPersona
         *
         * @return  self
         */
        public function setTipoPersona($tipoPersona)
        {
            $this->tipoPersona = $tipoPersona;

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
         * Get the value of numeroDocumentoIdentidad
         */
        public function getNumeroDocumentoIdentidad()
        {
            return $this->numeroDocumentoIdentidad;
        }

        /**
         * Set the value of numeroDocumentoIdentidad
         *
         * @return  self
         */
        public function setNumeroDocumentoIdentidad($numeroDocumentoIdentidad)
        {
            $this->numeroDocumentoIdentidad = $numeroDocumentoIdentidad;

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
         * Get the value of direccionNotificaciones
         */
        public function getDireccionNotificaciones()
        {
            return $this->direccionNotificaciones;
        }

        /**
         * Set the value of direccionNotificaciones
         *
         * @return  self
         */
        public function setDireccionNotificaciones($direccionNotificaciones)
        {
            $this->direccionNotificaciones = $direccionNotificaciones;

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
         * Get the value of PersonaAutorizada
         */
        public function getPersonaAutorizada()
        {
            return $this->PersonaAutorizada;
        }

        /**
         * Set the value of PersonaAutorizada
         *
         * @return  self
         */
        public function setPersonaAutorizada($PersonaAutorizada)
        {
            $this->PersonaAutorizada = $PersonaAutorizada;

            return $this;
        }
    }

?>


