
/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Declaracion
    {
        //VARIABLES
        private $numeroDeclaracion;
        private $fechaSolicitud;
        private $tipoDeclaracion;
        private $fechaDeclaracion;
        private $fechaTramite;
        private $resolucion;
        private $tipoDespacho;
        private $tipoCarga;
        private $observacion;

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

        /**
         * Get the value of fechaSolicitud
         */

        public function getFechaSolicitud()
        {
            return $this->fechaSolicitud;
        }

        /**
         * Set the value of fechaSolicitud
         *
         * @return  self
         */

        public function setFechaSolicitud($fechaSolicitud)
        {
            $this->fechaSolicitud = $fechaSolicitud;

            return $this;
        }

        /**
         * Get the value of tipoDeclaracion
         */

        public function getTipoDeclaracion()
        {
            return $this->tipoDeclaracion;
        }

        /**
         * Set the value of tipoDeclaracion
         *
         * @return  self
         */

        public function setTipoDeclaracion($tipoDeclaracion)
        {
            $this->tipoDeclaracion = $tipoDeclaracion;

            return $this;
        }

        /**
         * Get the value of fechaDeclaracion
         */

        public function getFechaDeclaracion()
        {
            return $this->fechaDeclaracion;
        }

        /**
         * Set the value of fechaDeclaracion
         *
         * @return  self
         */

        public function setFechaDeclaracion($fechaDeclaracion)
        {
            $this->fechaDeclaracion = $fechaDeclaracion;

            return $this;
        }

        /**
         * Get the value of fechaTramite
         */

        public function getFechaTramite()
        {
            return $this->fechaTramite;
        }

        /**
         * Set the value of fechaTramite
         *
         * @return  self
         */

        public function setFechaTramite($fechaTramite)
        {
            $this->fechaTramite = $fechaTramite;

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

        /**
         * Get the value of tipoDespacho
         */

        public function getTipoDespacho()
        {
            return $this->tipoDespacho;
        }

        /**
         * Set the value of tipoDespacho
         *
         * @return  self
         */

        public function setTipoDespacho($tipoDespacho)
        {
            $this->tipoDespacho = $tipoDespacho;

            return $this;
        }

        /**
         * Get the value of tipoCarga
         */

        public function getTipoCarga()
        {
            return $this->tipoCarga;
        }

        /**
         * Set the value of tipoCarga
         *
         * @return  self
         */

        public function setTipoCarga($tipoCarga)
        {
            $this->tipoCarga = $tipoCarga;

            return $this;
        }

        /**
         * Get the value of observacion
         */

        public function getObservacion()
        {
            return $this->observacion;
        }

        /**
         * Set the value of observacion
         *
         * @return  self
         */

        public function setObservacion($observacion)
        {
            $this->observacion = $observacion;

            return $this;
        }
    }

?>
