/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Consignatario
    {
        //VARIABLES
        private $direccion;
        private $nombre;
        private $numeroDocumento;
        private $tipoDocumento;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

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
    }
    
?>

