/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Declarante
    {
        //VARIABLES
        private $tipoDocumento;
        private $numeroIdentificacion;
        private $nombre;
        private $codigo;
        private $pais;

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
         * Get the value of numeroIdentificacion
         */

        public function getNumeroIdentificacion()
        {
            return $this->numeroIdentificacion;
        }

        /**
         * Set the value of numeroIdentificacion
         *
         * @return  self
         */

        public function setNumeroIdentificacion($numeroIdentificacion)
        {
            $this->numeroIdentificacion = $numeroIdentificacion;

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
         * Get the value of codigo
         */

        public function getCodigo()
        {
            return $this->codigo;
        }

        /**
         * Set the value of codigo
         *
         * @return  self
         */

        public function setCodigo($codigo)
        {
            $this->codigo = $codigo;

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
    } ?>

