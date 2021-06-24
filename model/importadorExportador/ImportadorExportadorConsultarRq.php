/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class ImportadorExportadorConsultarRq
    {
        //VARIABLES
        private $tipoDocumento;
        private $numeroDocumento;
        private $clasificacion;
        private $paisOrigen;
        private $paisDestino;

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
         * Get the value of clasificacion
         */

        public function getClasificacion()
        {
            return $this->clasificacion;
        }

        /**
         * Set the value of clasificacion
         *
         * @return  self
         */

        public function setClasificacion($clasificacion)
        {
            $this->clasificacion = $clasificacion;

            return $this;
        }

        /**
         * Get the value of paisOrigen
         */

        public function getPaisOrigen()
        {
            return $this->paisOrigen;
        }

        /**
         * Set the value of paisOrigen
         *
         * @return  self
         */

        public function setPaisOrigen($paisOrigen)
        {
            $this->paisOrigen = $paisOrigen;

            return $this;
        }

        /**
         * Get the value of paisDestino
         */

        public function getPaisDestino()
        {
            return $this->paisDestino;
        }

        /**
         * Set the value of paisDestino
         *
         * @return  self
         */

        public function setPaisDestino($paisDestino)
        {
            $this->paisDestino = $paisDestino;

            return $this;
        }
    } ?>



 