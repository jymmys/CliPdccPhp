/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Pago
    {
        //VARIABLES
        private $medioPago;
        private $otrosGastosTotal;
        private $valorTransaccionTotal;
        private $garantia;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of medioPago
         */

        public function getMedioPago()
        {
            return $this->medioPago;
        }

        /**
         * Set the value of medioPago
         *
         * @return  self
         */

        public function setMedioPago($medioPago)
        {
            $this->medioPago = $medioPago;

            return $this;
        }

        /**
         * Get the value of otrosGastosTotal
         */

        public function getOtrosGastosTotal()
        {
            return $this->otrosGastosTotal;
        }

        /**
         * Set the value of otrosGastosTotal
         *
         * @return  self
         */

        public function setOtrosGastosTotal($otrosGastosTotal)
        {
            $this->otrosGastosTotal = $otrosGastosTotal;

            return $this;
        }

        /**
         * Get the value of valorTransaccionTotal
         */

        public function getValorTransaccionTotal()
        {
            return $this->valorTransaccionTotal;
        }

        /**
         * Set the value of valorTransaccionTotal
         *
         * @return  self
         */

        public function setValorTransaccionTotal($valorTransaccionTotal)
        {
            $this->valorTransaccionTotal = $valorTransaccionTotal;

            return $this;
        }

        /**
         * Get the value of garantia
         */

        public function getGarantia()
        {
            return $this->garantia;
        }

        /**
         * Set the value of garantia
         *
         * @return  self
         */

        public function setGarantia($garantia)
        {
            $this->garantia = $garantia;

            return $this;
        }
    } ?>

