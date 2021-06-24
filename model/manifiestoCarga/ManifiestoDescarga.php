/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class ManifiestoDescarga
    {
        //VARIABLES
        private $numeroManifiesto;
        private $codigoArancelario;
        private $descripcion;
        private $fechaPrevistaLlegada;
        private $pesoBruto;

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
         * Get the value of descripcion
         */

        public function getDescripcion()
        {
            return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */

        public function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;

            return $this;
        }

        /**
         * Get the value of fechaPrevistaLlegada
         */

        public function getFechaPrevistaLlegada()
        {
            return $this->fechaPrevistaLlegada;
        }

        /**
         * Set the value of fechaPrevistaLlegada
         *
         * @return  self
         */

        public function setFechaPrevistaLlegada($fechaPrevistaLlegada)
        {
            $this->fechaPrevistaLlegada = $fechaPrevistaLlegada;

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
    }
?>

