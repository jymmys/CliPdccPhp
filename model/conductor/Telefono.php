
/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Telefono
    {
        //Variables
        private string $MOVIL;
        private string $FIJO;


        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS
        /**
         * Get the value of MOVIL
         */

        public function getMOVIL()
        {
            return $this->MOVIL;
        }

        /**
         * Set the value of MOVIL
         *
         * @return  self
         */

        public function setMOVIL($MOVIL)
        {
            $this->MOVIL = $MOVIL;

            return $this;
        }

        /**
         * Get the value of FIJO
         */

        public function getFIJO()
        {
            return $this->FIJO;
        }

        /**
         * Set the value of FIJO
         *
         * @return  self
         */

        public function setFIJO($FIJO)
        {
            $this->FIJO = $FIJO;

            return $this;
        }
    } ?>

