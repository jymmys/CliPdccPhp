/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class ConductorCambioEstadoRq
    {
        private $CONDUCTOR;

            
        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS
        /**
         * Get the value of CONDUCTOR
         */

        public function getCONDUCTOR()
        {
            return $this->CONDUCTOR;
        }

        /**
         * Set the value of CONDUCTOR
         *
         * @return  self
         */

        public function setCONDUCTOR($CONDUCTOR)
        {
            $this->CONDUCTOR = $CONDUCTOR;

            return $this;
        }
    }

?>
