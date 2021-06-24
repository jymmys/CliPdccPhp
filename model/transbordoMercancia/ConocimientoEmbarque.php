/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class ConocimientoEmbarque
    {
        //VARIABLES
        private $cantidadTotalBulto;
        private $fechaConocimientoEmbarque;
        private $lugarDesembarque;
        private $lugarEmbarque;
        private $numeroConocimientoMaestro;
        private $numeroDocumentoEmbarque;
        private $pesoBruto;
        private $pesoBrutoTotal;
        private $tipoEmbarque;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of cantidadTotalBulto
         */

        public function getCantidadTotalBulto()
        {
            return $this->cantidadTotalBulto;
        }

        /**
         * Set the value of cantidadTotalBulto
         *
         * @return  self
         */

        public function setCantidadTotalBulto($cantidadTotalBulto)
        {
            $this->cantidadTotalBulto = $cantidadTotalBulto;

            return $this;
        }

        /**
         * Get the value of fechaConocimientoEmbarque
         */

        public function getFechaConocimientoEmbarque()
        {
            return $this->fechaConocimientoEmbarque;
        }

        /**
         * Set the value of fechaConocimientoEmbarque
         *
         * @return  self
         */

        public function setFechaConocimientoEmbarque($fechaConocimientoEmbarque)
        {
            $this->fechaConocimientoEmbarque = $fechaConocimientoEmbarque;

            return $this;
        }

        /**
         * Get the value of lugarDesembarque
         */

        public function getLugarDesembarque()
        {
            return $this->lugarDesembarque;
        }

        /**
         * Set the value of lugarDesembarque
         *
         * @return  self
         */

        public function setLugarDesembarque($lugarDesembarque)
        {
            $this->lugarDesembarque = $lugarDesembarque;

            return $this;
        }

        /**
         * Get the value of lugarEmbarque
         */

        public function getLugarEmbarque()
        {
            return $this->lugarEmbarque;
        }

        /**
         * Set the value of lugarEmbarque
         *
         * @return  self
         */

        public function setLugarEmbarque($lugarEmbarque)
        {
            $this->lugarEmbarque = $lugarEmbarque;

            return $this;
        }

        /**
         * Get the value of numeroConocimientoMaestro
         */

        public function getNumeroConocimientoMaestro()
        {
            return $this->numeroConocimientoMaestro;
        }

        /**
         * Set the value of numeroConocimientoMaestro
         *
         * @return  self
         */

        public function setNumeroConocimientoMaestro($numeroConocimientoMaestro)
        {
            $this->numeroConocimientoMaestro = $numeroConocimientoMaestro;

            return $this;
        }

        /**
         * Get the value of numeroDocumentoEmbarque
         */

        public function getNumeroDocumentoEmbarque()
        {
            return $this->numeroDocumentoEmbarque;
        }

        /**
         * Set the value of numeroDocumentoEmbarque
         *
         * @return  self
         */

        public function setNumeroDocumentoEmbarque($numeroDocumentoEmbarque)
        {
            $this->numeroDocumentoEmbarque = $numeroDocumentoEmbarque;

            return $this;
        }

        /**
         * Get the value of pesoBruto
         */

        public function getPesoBruto()
        {
            return $this->pesoBruto;
        }

        /**
         * Set the value of pesoBruto
         *
         * @return  self
         */

        public function setPesoBruto($pesoBruto)
        {
            $this->pesoBruto = $pesoBruto;

            return $this;
        }

        /**
         * Get the value of pesoBrutoTotal
         */

        public function getPesoBrutoTotal()
        {
            return $this->pesoBrutoTotal;
        }

        /**
         * Set the value of pesoBrutoTotal
         *
         * @return  self
         */

        public function setPesoBrutoTotal($pesoBrutoTotal)
        {
            $this->pesoBrutoTotal = $pesoBrutoTotal;

            return $this;
        }

        /**
         * Get the value of tipoEmbarque
         */

        public function getTipoEmbarque()
        {
            return $this->tipoEmbarque;
        }

        /**
         * Set the value of tipoEmbarque
         *
         * @return  self
         */

        public function setTipoEmbarque($tipoEmbarque)
        {
            $this->tipoEmbarque = $tipoEmbarque;

            return $this;
        }
    }

?>
