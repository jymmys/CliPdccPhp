/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Importador
    {
        //VARIABLES
        private $tipoDocumento;
        private $consignatario;
        private $domicilioFiscal;
        private $telefonoContacto;
        private $correoElectronico;
        private $pais;
        private $numeroDocumento;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

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
         * Get the value of consignatario
         */

        public function getConsignatario()
        {
            return $this->consignatario;
        }

        /**
         * Set the value of consignatario
         *
         * @return  self
         */

        public function setConsignatario($consignatario)
        {
            $this->consignatario = $consignatario;

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
         * Get the value of telefonoContacto
         */

        public function getTelefonoContacto()
        {
            return $this->telefonoContacto;
        }

        /**
         * Set the value of telefonoContacto
         *
         * @return  self
         */

        public function setTelefonoContacto($telefonoContacto)
        {
            $this->telefonoContacto = $telefonoContacto;

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
    } ?>

