/*/
@Yimis Torreglosa Diaz
/*/

<?php

    class Resolucion
    {
            
    //VARIABLES
        private $numeroResolucion;
        private $fechaResolucion;
        private $numeroCorrelativoInscripcion;
        private $resolucion;

    
        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS


        /**
         * Get the value of numeroResolucion
         */
        public function getNumeroResolucion()
        {
            return $this->numeroResolucion;
        }

        /**
         * Set the value of numeroResolucion
         *
         * @return  self
         */
        public function setNumeroResolucion($numeroResolucion)
        {
            $this->numeroResolucion = $numeroResolucion;

            return $this;
        }

        /**
         * Get the value of fechaResolucion
         */
        public function getFechaResolucion()
        {
            return $this->fechaResolucion;
        }

        /**
         * Set the value of fechaResolucion
         *
         * @return  self
         */
        public function setFechaResolucion($fechaResolucion)
        {
            $this->fechaResolucion = $fechaResolucion;

            return $this;
        }

        /**
         * Get the value of numeroCorrelativoInscripcion
         */
        public function getNumeroCorrelativoInscripcion()
        {
            return $this->numeroCorrelativoInscripcion;
        }

        /**
         * Set the value of numeroCorrelativoInscripcion
         *
         * @return  self
         */
        public function setNumeroCorrelativoInscripcion($numeroCorrelativoInscripcion)
        {
            $this->numeroCorrelativoInscripcion = $numeroCorrelativoInscripcion;

            return $this;
        }

        /**
         * Get the value of resolucion
         */
        public function getResolucion()
        {
            return $this->resolucion;
        }

        /**
         * Set the value of resolucion
         *
         * @return  self
         */
        public function setResolucion($resolucion)
        {
            $this->resolucion = $resolucion;

            return $this;
        }
    }

?>

