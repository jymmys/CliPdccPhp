/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class MedioTransporteConsultarRq
    {
        //VARIABLES
        private $nroPlacaMedioTransporte;
        private $tipoMedioTransporte;
        private $pais;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of nroPlacaMedioTransporte
         */

        public function getNroPlacaMedioTransporte()
        {
            return $this->nroPlacaMedioTransporte;
        }

        /**
         * Set the value of nroPlacaMedioTransporte
         *
         * @return  self
         */

        public function setNroPlacaMedioTransporte($nroPlacaMedioTransporte)
        {
            $this->nroPlacaMedioTransporte = $nroPlacaMedioTransporte;

            return $this;
        }

        /**
         * Get the value of tipoMedioTransporte
         */

        public function getTipoMedioTransporte()
        {
            return $this->tipoMedioTransporte;
        }

        /**
         * Set the value of tipoMedioTransporte
         *
         * @return  self
         */

        public function setTipoMedioTransporte($tipoMedioTransporte)
        {
            $this->tipoMedioTransporte = $tipoMedioTransporte;

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
    }

?>

