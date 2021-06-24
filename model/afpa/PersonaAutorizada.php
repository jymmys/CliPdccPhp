/*/
@Yimis Torreglosa Diaz
/*/

<?php

    class PersonaAutorizada
    {
            
    //VARIABLES
        private $nombre;
        private $tipoDocumento;
        private $numeroDocumento;
        private $pais;
        private $domicilioFiscal;
        private $direccionNotificaciones;
        private $telefono;
        private $correoElectronico;

    
        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS


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
         * Get the value of tipoDocumento
         */
        public function getTipoDocumento()
        {
            return $this->tipoDocumento;
        }

        /**
         * Set the value of tipoDocumento
         *
         * @return  self
         */
        public function setTipoDocumento($tipoDocumento)
        {
            $this->tipoDocumento = $tipoDocumento;

            return $this;
        }

        /**
         * Get the value of numeroDocumento
         */
        public function getNumeroDocumento()
        {
            return $this->numeroDocumento;
        }

        /**
         * Set the value of numeroDocumento
         *
         * @return  self
         */
        public function setNumeroDocumento($numeroDocumento)
        {
            $this->numeroDocumento = $numeroDocumento;

            return $this;
        }

        /**
         * Get the value of pais
         */
        public function getPais()
        {
            return $this->pais;
        }

        /**
         * Set the value of pais
         *
         * @return  self
         */
        public function setPais($pais)
        {
            $this->pais = $pais;

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
    }

?>

