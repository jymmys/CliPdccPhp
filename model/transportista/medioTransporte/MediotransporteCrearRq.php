/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class MediotransporteCrearRq
    {
        //VARIABLES
        private $Transportistas;
        private $MediosTransporte;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of Transportistas
         */

        public function getTransportistas()
        {
            return $this->Transportistas;
        }

        /**
         * Set the value of Transportistas
         *
         * @return  self
         */

        public function setTransportistas($Transportistas)
        {
            $this->Transportistas = $Transportistas;

            return $this;
        }

        /**
         * Get the value of MediosTransporte
         */

        public function getMediosTransporte()
        {
            return $this->MediosTransporte;
        }

        /**
         * Set the value of MediosTransporte
         *
         * @return  self
         */

        public function setMediosTransporte($MediosTransporte)
        {
            $this->MediosTransporte = $MediosTransporte;

            return $this;
        }
    }

?>


