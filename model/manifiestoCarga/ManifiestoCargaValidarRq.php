/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class ManifiestoCargaValidarRq
    {
        //VARIABLES
        private $numeroManifiesto;
        private $codigoArancelario;
        private $pesoBrutoNacionalizado;

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

        /**
         * Get the value of codigoArancelario
         */

        public function getCodigoArancelario()
        {
            return $this->codigoArancelario;
        }

        /**
         * Set the value of codigoArancelario
         *
         * @return  self
         */

        public function setCodigoArancelario($codigoArancelario)
        {
            $this->codigoArancelario = $codigoArancelario;

            return $this;
        }

        /**
         * Get the value of pesoBrutoNacionalizado
         */

        public function getPesoBrutoNacionalizado()
        {
            return $this->pesoBrutoNacionalizado;
        }

        /**
         * Set the value of pesoBrutoNacionalizado
         *
         * @return  self
         */

        public function setPesoBrutoNacionalizado($pesoBrutoNacionalizado)
        {
            $this->pesoBrutoNacionalizado = $pesoBrutoNacionalizado;

            return $this;
        }
    }

?>

