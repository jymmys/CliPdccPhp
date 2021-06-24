/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class LicenciaConductor
    {
        //Variables
        private $NUMERO_DE_LICENCIA;
        private $PAIS_DE_EMISION;

        //Constructor
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of NUMERO_DE_LICENCIA
         */

        public function getNUMERO_DE_LICENCIA()
        {
            return $this->NUMERO_DE_LICENCIA;
        }

        /**
         * Set the value of NUMERO_DE_LICENCIA
         *
         * @return  self
         */

        public function setNUMERO_DE_LICENCIA($NUMERO_DE_LICENCIA)
        {
            $this->NUMERO_DE_LICENCIA = $NUMERO_DE_LICENCIA;

            return $this;
        }

        /**
         * Get the value of PAIS_DE_EMISION
         */

        public function getPAIS_DE_EMISION()
        {
            return $this->PAIS_DE_EMISION;
        }

        /**
         * Set the value of PAIS_DE_EMISION
         *
         * @return  self
         */

        public function setPAIS_DE_EMISION($PAIS_DE_EMISION)
        {
            $this->PAIS_DE_EMISION = $PAIS_DE_EMISION;

            return $this;
        }
    } ?>

