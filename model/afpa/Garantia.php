/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Garantia
    {
            
    //VARIABLES
        private $claseGarantia;
        private $monto;
        private $numeroGarantia;
        private $lugarExpedicion;
        private $fechaExpedicion;
        private $vigencia;
        private $entidadEmisora;

    
        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of claseGarantia
         */
        public function getClaseGarantia()
        {
            return $this->claseGarantia;
        }

        /**
         * Set the value of claseGarantia
         *
         * @return  self
         */
        public function setClaseGarantia($claseGarantia)
        {
            $this->claseGarantia = $claseGarantia;

            return $this;
        }

        /**
         * Get the value of monto
         */
        public function getMonto()
        {
            return $this->monto;
        }

        /**
         * Set the value of monto
         *
         * @return  self
         */
        public function setMonto($monto)
        {
            $this->monto = $monto;

            return $this;
        }

        /**
         * Get the value of numeroGarantia
         */
        public function getNumeroGarantia()
        {
            return $this->numeroGarantia;
        }

        /**
         * Set the value of numeroGarantia
         *
         * @return  self
         */
        public function setNumeroGarantia($numeroGarantia)
        {
            $this->numeroGarantia = $numeroGarantia;

            return $this;
        }

        /**
         * Get the value of lugarExpedicion
         */
        public function getLugarExpedicion()
        {
            return $this->lugarExpedicion;
        }

        /**
         * Set the value of lugarExpedicion
         *
         * @return  self
         */
        public function setLugarExpedicion($lugarExpedicion)
        {
            $this->lugarExpedicion = $lugarExpedicion;

            return $this;
        }

        /**
         * Get the value of fechaExpedicion
         */
        public function getFechaExpedicion()
        {
            return $this->fechaExpedicion;
        }

        /**
         * Set the value of fechaExpedicion
         *
         * @return  self
         */
        public function setFechaExpedicion($fechaExpedicion)
        {
            $this->fechaExpedicion = $fechaExpedicion;

            return $this;
        }

        /**
         * Get the value of vigencia
         */
        public function getVigencia()
        {
            return $this->vigencia;
        }

        /**
         * Set the value of vigencia
         *
         * @return  self
         */
        public function setVigencia($vigencia)
        {
            $this->vigencia = $vigencia;

            return $this;
        }

        /**
         * Get the value of entidadEmisora
         */
        public function getEntidadEmisora()
        {
            return $this->entidadEmisora;
        }

        /**
         * Set the value of entidadEmisora
         *
         * @return  self
         */
        public function setEntidadEmisora($entidadEmisora)
        {
            $this->entidadEmisora = $entidadEmisora;

            return $this;
        }
    }

?>

