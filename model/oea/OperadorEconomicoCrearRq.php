/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class OperadorEconomicoCrearRq
    {
        //VARIABLES
        private $Solicitante;
        private $Resultado;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of Solicitante
         */

        public function getSolicitante()
        {
            return $this->Solicitante;
        }

        /**
         * Set the value of Solicitante
         *
         * @return  self
         */

        public function setSolicitante($Solicitante)
        {
            $this->Solicitante = $Solicitante;

            return $this;
        }

        /**
         * Get the value of Resultado
         */

        public function getResultado()
        {
            return $this->Resultado;
        }

        /**
         * Set the value of Resultado
         *
         * @return  self
         */

        public function setResultado($Resultado)
        {
            $this->Resultado = $Resultado;

            return $this;
        }
    }

?>
