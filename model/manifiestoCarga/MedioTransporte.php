/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class MedioTransporte
    {
        //VARIABLES
        private $nombreTransportista;
        private $codigoTransportista;
        private $medioTransporte;
        private $numeroTransporte;
        private $numeroVehiculo;
        private $numeroViaje;
        private $numeroNaveAeronave;
        private $nombreNaveAeronave;
        private $banderaPais;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of nombreTransportista
         */

        public function getNombreTransportista()
        {
            return $this->nombreTransportista;
        }

        /**
         * Set the value of nombreTransportista
         *
         * @return  self
         */

        public function setNombreTransportista($nombreTransportista)
        {
            $this->nombreTransportista = $nombreTransportista;

            return $this;
        }

        /**
         * Get the value of codigoTransportista
         */

        public function getCodigoTransportista()
        {
            return $this->codigoTransportista;
        }

        /**
         * Set the value of codigoTransportista
         *
         * @return  self
         */

        public function setCodigoTransportista($codigoTransportista)
        {
            $this->codigoTransportista = $codigoTransportista;

            return $this;
        }

        /**
         * Get the value of medioTransporte
         */

        public function getMedioTransporte()
        {
            return $this->medioTransporte;
        }

        /**
         * Set the value of medioTransporte
         *
         * @return  self
         */

        public function setMedioTransporte($medioTransporte)
        {
            $this->medioTransporte = $medioTransporte;

            return $this;
        }

        /**
         * Get the value of numeroTransporte
         */

        public function getNumeroTransporte()
        {
            return $this->numeroTransporte;
        }

        /**
         * Set the value of numeroTransporte
         *
         * @return  self
         */

        public function setNumeroTransporte($numeroTransporte)
        {
            $this->numeroTransporte = $numeroTransporte;

            return $this;
        }

        /**
         * Get the value of numeroVehiculo
         */

        public function getNumeroVehiculo()
        {
            return $this->numeroVehiculo;
        }

        /**
         * Set the value of numeroVehiculo
         *
         * @return  self
         */

        public function setNumeroVehiculo($numeroVehiculo)
        {
            $this->numeroVehiculo = $numeroVehiculo;

            return $this;
        }

        /**
         * Get the value of numeroViaje
         */

        public function getNumeroViaje()
        {
            return $this->numeroViaje;
        }

        /**
         * Set the value of numeroViaje
         *
         * @return  self
         */

        public function setNumeroViaje($numeroViaje)
        {
            $this->numeroViaje = $numeroViaje;

            return $this;
        }

        /**
         * Get the value of numeroNaveAeronave
         */

        public function getNumeroNaveAeronave()
        {
            return $this->numeroNaveAeronave;
        }

        /**
         * Set the value of numeroNaveAeronave
         *
         * @return  self
         */

        public function setNumeroNaveAeronave($numeroNaveAeronave)
        {
            $this->numeroNaveAeronave = $numeroNaveAeronave;

            return $this;
        }

        /**
         * Get the value of nombreNaveAeronave
         */

        public function getNombreNaveAeronave()
        {
            return $this->nombreNaveAeronave;
        }

        /**
         * Set the value of nombreNaveAeronave
         *
         * @return  self
         */

        public function setNombreNaveAeronave($nombreNaveAeronave)
        {
            $this->nombreNaveAeronave = $nombreNaveAeronave;

            return $this;
        }

        /**
         * Get the value of banderaPais
         */

        public function getBanderaPais()
        {
            return $this->banderaPais;
        }

        /**
         * Set the value of banderaPais
         *
         * @return  self
         */

        public function setBanderaPais($banderaPais)
        {
            $this->banderaPais = $banderaPais;

            return $this;
        }
    }
?>

