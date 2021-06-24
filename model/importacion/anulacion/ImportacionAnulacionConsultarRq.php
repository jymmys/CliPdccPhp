/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class ImportacionAnulacionConsultarRq
    {
        //VARIABLES
        private $numeroDeclaracion;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of numeroDeclaracion
         */

        public function getNumeroDeclaracion()
        {
            return $this->numeroDeclaracion;
        }

        /**
         * Set the value of numeroDeclaracion
         *
         * @return  self
         */

        public function setNumeroDeclaracion($numeroDeclaracion)
        {
            $this->numeroDeclaracion = $numeroDeclaracion;

            return $this;
        }
    } ?>


