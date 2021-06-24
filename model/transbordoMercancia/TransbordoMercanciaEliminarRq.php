/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class TransbordoMercanciaEliminarRq
    {
        //VARIABLES
        private $numeroManifiesto;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of numeroManifiesto
         */

        public function getNumeroManifiesto()
        {
            return $this->numeroManifiesto;
        }

        /**
         * Set the value of numeroManifiesto
         *
         * @return  self
         */

        public function setNumeroManifiesto($numeroManifiesto)
        {
            $this->numeroManifiesto = $numeroManifiesto;

            return $this;
        }
    } ?>

