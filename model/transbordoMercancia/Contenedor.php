/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Contenedor
    {
        //VARIABLES
        private $estadoContenedor;
        private $numeroContenedor;
        private $numeroMarchamo;
        private $pais;
        private $tamanioContenedor;
        private $tipoContenedor;
        private $totalPeso;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of estadoContenedor
         */

        public function getEstadoContenedor()
        {
            return $this->estadoContenedor;
        }

        /**
         * Set the value of estadoContenedor
         *
         * @return  self
         */

        public function setEstadoContenedor($estadoContenedor)
        {
            $this->estadoContenedor = $estadoContenedor;

            return $this;
        }

        /**
         * Get the value of numeroContenedor
         */

        public function getNumeroContenedor()
        {
            return $this->numeroContenedor;
        }

        /**
         * Set the value of numeroContenedor
         *
         * @return  self
         */

        public function setNumeroContenedor($numeroContenedor)
        {
            $this->numeroContenedor = $numeroContenedor;

            return $this;
        }

        /**
         * Get the value of numeroMarchamo
         */

        public function getNumeroMarchamo()
        {
            return $this->numeroMarchamo;
        }

        /**
         * Set the value of numeroMarchamo
         *
         * @return  self
         */

        public function setNumeroMarchamo($numeroMarchamo)
        {
            $this->numeroMarchamo = $numeroMarchamo;

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
         * Get the value of tamanioContenedor
         */

        public function getTamanioContenedor()
        {
            return $this->tamanioContenedor;
        }

        /**
         * Set the value of tamanioContenedor
         *
         * @return  self
         */

        public function setTamanioContenedor($tamanioContenedor)
        {
            $this->tamanioContenedor = $tamanioContenedor;

            return $this;
        }

        /**
         * Get the value of tipoContenedor
         */

        public function getTipoContenedor()
        {
            return $this->tipoContenedor;
        }

        /**
         * Set the value of tipoContenedor
         *
         * @return  self
         */

        public function setTipoContenedor($tipoContenedor)
        {
            $this->tipoContenedor = $tipoContenedor;

            return $this;
        }

        /**
         * Get the value of totalPeso
         */

        public function getTotalPeso()
        {
            return $this->totalPeso;
        }

        /**
         * Set the value of totalPeso
         *
         * @return  self
         */

        public function setTotalPeso($totalPeso)
        {
            $this->totalPeso = $totalPeso;

            return $this;
        }
    }
?>

