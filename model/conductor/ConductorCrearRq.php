/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class ConductorCrearRq
    {
        //Variables
        private $CONDUCTORES;
          
        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of CONDUCTORES
         */

        public function getCONDUCTORES()
        {
            return $this->CONDUCTORES;
        }

        /**
         * Set the value of CONDUCTORES
         *
         * @return  self
         */

        public function setCONDUCTORES($CONDUCTORES)
        {
            $this->CONDUCTORES = $CONDUCTORES;

            return $this;
        }
    } ?>




