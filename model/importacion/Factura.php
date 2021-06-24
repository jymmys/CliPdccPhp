/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Factura
    {
        //VARIABLES
        private $numero;
        private $fechaEmision;
        private $suplidor;
        private $relacionSuplidor;
        private $moneda;
        private $valorOriginal;
        private $tasaCambio;
        private $valor;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of numero
         */

        public function getNumero()
        {
            return $this->numero;
        }

        /**
         * Set the value of numero
         *
         * @return  self
         */

        public function setNumero($numero)
        {
            $this->numero = $numero;

            return $this;
        }

        /**
         * Get the value of fechaEmision
         */

        public function getFechaEmision()
        {
            return $this->fechaEmision;
        }

        /**
         * Set the value of fechaEmision
         *
         * @return  self
         */

        public function setFechaEmision($fechaEmision)
        {
            $this->fechaEmision = $fechaEmision;

            return $this;
        }

        /**
         * Get the value of suplidor
         */

        public function getSuplidor()
        {
            return $this->suplidor;
        }

        /**
         * Set the value of suplidor
         *
         * @return  self
         */

        public function setSuplidor($suplidor)
        {
            $this->suplidor = $suplidor;

            return $this;
        }

        /**
         * Get the value of relacionSuplidor
         */

        public function getRelacionSuplidor()
        {
            return $this->relacionSuplidor;
        }

        /**
         * Set the value of relacionSuplidor
         *
         * @return  self
         */

        public function setRelacionSuplidor($relacionSuplidor)
        {
            $this->relacionSuplidor = $relacionSuplidor;

            return $this;
        }

        /**
         * Get the value of moneda
         */

        public function getMoneda()
        {
            return $this->moneda;
        }

        /**
         * Set the value of moneda
         *
         * @return  self
         */

        public function setMoneda($moneda)
        {
            $this->moneda = $moneda;

            return $this;
        }

        /**
         * Get the value of valorOriginal
         */

        public function getValorOriginal()
        {
            return $this->valorOriginal;
        }

        /**
         * Set the value of valorOriginal
         *
         * @return  self
         */

        public function setValorOriginal($valorOriginal)
        {
            $this->valorOriginal = $valorOriginal;

            return $this;
        }

        /**
         * Get the value of tasaCambio
         */

        public function getTasaCambio()
        {
            return $this->tasaCambio;
        }

        /**
         * Set the value of tasaCambio
         *
         * @return  self
         */

        public function setTasaCambio($tasaCambio)
        {
            $this->tasaCambio = $tasaCambio;

            return $this;
        }

        /**
         * Get the value of valor
         */

        public function getValor()
        {
            return $this->valor;
        }

        /**
         * Set the value of valor
         *
         * @return  self
         */

        public function setValor($valor)
        {
            $this->valor = $valor;

            return $this;
        }
    } ?>

