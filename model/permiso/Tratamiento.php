/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Tratamiento
    {
        //VARIABLES
        private $nombreTratamiento;
        private $ingredienteActivo;
        private $concentracion;
        private $duracionTemperatura;
        private $nombreResponsable;
        private $fechaTratamiento;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of nombreTratamiento
         */

        public function getNombreTratamiento()
        {
            return $this->nombreTratamiento;
        }

        /**
         * Set the value of nombreTratamiento
         *
         * @return  self
         */

        public function setNombreTratamiento($nombreTratamiento)
        {
            $this->nombreTratamiento = $nombreTratamiento;

            return $this;
        }

        /**
         * Get the value of ingredienteActivo
         */

        public function getIngredienteActivo()
        {
            return $this->ingredienteActivo;
        }

        /**
         * Set the value of ingredienteActivo
         *
         * @return  self
         */

        public function setIngredienteActivo($ingredienteActivo)
        {
            $this->ingredienteActivo = $ingredienteActivo;

            return $this;
        }

        /**
         * Get the value of concentracion
         */

        public function getConcentracion()
        {
            return $this->concentracion;
        }

        /**
         * Set the value of concentracion
         *
         * @return  self
         */

        public function setConcentracion($concentracion)
        {
            $this->concentracion = $concentracion;

            return $this;
        }

        /**
         * Get the value of duracionTemperatura
         */

        public function getDuracionTemperatura()
        {
            return $this->duracionTemperatura;
        }

        /**
         * Set the value of duracionTemperatura
         *
         * @return  self
         */

        public function setDuracionTemperatura($duracionTemperatura)
        {
            $this->duracionTemperatura = $duracionTemperatura;

            return $this;
        }

        /**
         * Get the value of nombreResponsable
         */

        public function getNombreResponsable()
        {
            return $this->nombreResponsable;
        }

        /**
         * Set the value of nombreResponsable
         *
         * @return  self
         */

        public function setNombreResponsable($nombreResponsable)
        {
            $this->nombreResponsable = $nombreResponsable;

            return $this;
        }

        /**
         * Get the value of fechaTratamiento
         */

        public function getFechaTratamiento()
        {
            return $this->fechaTratamiento;
        }

        /**
         * Set the value of fechaTratamiento
         *
         * @return  self
         */

        public function setFechaTratamiento($fechaTratamiento)
        {
            $this->fechaTratamiento = $fechaTratamiento;

            return $this;
        }
    }
?>

