/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class ConductorAsociarTransportistaRq
    {
        private $CODIGO_CONDUCTOR;
        private $CODIGO_TRANSPORTISTA;
        private $ODIGO_CONDUCTOR;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS
        /**
         * Get the value of CODIGO_CONDUCTOR
         */
        public function getCODIGO_CONDUCTOR()
        {
            return $this->CODIGO_CONDUCTOR;
        }

        /**
         * Set the value of CODIGO_CONDUCTOR
         *
         * @return  self
         */
        public function setCODIGO_CONDUCTOR($CODIGO_CONDUCTOR)
        {
            $this->CODIGO_CONDUCTOR = $CODIGO_CONDUCTOR;

            return $this;
        }

        /**
         * Get the value of CODIGO_TRANSPORTISTA
         */
        public function getCODIGO_TRANSPORTISTA()
        {
            return $this->CODIGO_TRANSPORTISTA;
        }

        /**
         * Set the value of CODIGO_TRANSPORTISTA
         *
         * @return  self
         */
        public function setCODIGO_TRANSPORTISTA($CODIGO_TRANSPORTISTA)
        {
            $this->CODIGO_TRANSPORTISTA = $CODIGO_TRANSPORTISTA;

            return $this;
        }

        /**
         * Get the value of ODIGO_CONDUCTOR
         */
        public function getODIGO_CONDUCTOR()
        {
            return $this->ODIGO_CONDUCTOR;
        }

        /**
         * Set the value of ODIGO_CONDUCTOR
         *
         * @return  self
         */
        public function setODIGO_CONDUCTOR($ODIGO_CONDUCTOR)
        {
            $this->ODIGO_CONDUCTOR = $ODIGO_CONDUCTOR;

            return $this;
        }
    } ?>





