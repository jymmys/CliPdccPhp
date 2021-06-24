/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Exportador
    {
        //VARIABLES
        private $nombre;
        private $direccion;
        private $idTributaria;
        private $tipoDocumento;
        private $numeroDocumento;
        private $pais;
        private $telefonoContacto;
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
         * Get the value of direccion
         */

        public function getDireccion()
        {
            return $this->direccion;
        }

        /**
         * Set the value of direccion
         *
         * @return  self
         */

        public function setDireccion($direccion)
        {
            $this->direccion = $direccion;

            return $this;
        }

        /**
         * Get the value of idTributaria
         */

        public function getIdTributaria()
        {
            return $this->idTributaria;
        }

        /**
         * Set the value of idTributaria
         *
         * @return  self
         */

        public function setIdTributaria($idTributaria)
        {
            $this->idTributaria = $idTributaria;

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
    } ?>

