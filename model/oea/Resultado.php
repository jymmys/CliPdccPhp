/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Resultado
    {
        //VARIABLES
        private $fechaResolucion;
        private $estadoSolicitud;
        private $observaciones;
        private $fechaInicioVigencia;
        private $fechaFinVigencia;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

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
         * Get the value of estadoSolicitud
         */

        public function getEstadoSolicitud()
        {
            return $this->estadoSolicitud;
        }

        /**
         * Set the value of estadoSolicitud
         *
         * @return  self
         */

        public function setEstadoSolicitud($estadoSolicitud)
        {
            $this->estadoSolicitud = $estadoSolicitud;

            return $this;
        }

        /**
         * Get the value of observaciones
         */

        public function getObservaciones()
        {
            return $this->observaciones;
        }

        /**
         * Set the value of observaciones
         *
         * @return  self
         */

        public function setObservaciones($observaciones)
        {
            $this->observaciones = $observaciones;

            return $this;
        }

        /**
         * Get the value of fechaInicioVigencia
         */

        public function getFechaInicioVigencia()
        {
            return $this->fechaInicioVigencia;
        }

        /**
         * Set the value of fechaInicioVigencia
         *
         * @return  self
         */

        public function setFechaInicioVigencia($fechaInicioVigencia)
        {
            $this->fechaInicioVigencia = $fechaInicioVigencia;

            return $this;
        }

        /**
         * Get the value of fechaFinVigencia
         */

        public function getFechaFinVigencia()
        {
            return $this->fechaFinVigencia;
        }

        /**
         * Set the value of fechaFinVigencia
         *
         * @return  self
         */

        public function setFechaFinVigencia($fechaFinVigencia)
        {
            $this->fechaFinVigencia = $fechaFinVigencia;

            return $this;
        }
    }

?>
