/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class ManifiestoCargaDescargarRq
    {
        //VARIABLES
        private $Duca;
        private $Manifiesto;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of Duca
         */

        public function getDuca()
        {
            return $this->Duca;
        }

        /**
         * Set the value of Duca
         *
         * @return  self
         */

        public function setDuca($Duca)
        {
            $this->Duca = $Duca;

            return $this;
        }

        /**
         * Get the value of Manifiesto
         */

        public function getManifiesto()
        {
            return $this->Manifiesto;
        }

        /**
         * Set the value of Manifiesto
         *
         * @return  self
         */

        public function setManifiesto($Manifiesto)
        {
            $this->Manifiesto = $Manifiesto;

            return $this;
        }
    }
    
?>

