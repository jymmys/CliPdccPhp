/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class DetalleArticulo
    {
        //VARIABLES
        private $numeroDUCAImpo;
        private $paisDestino;
        private $fechaDescarga;
        private $pesoBrutoDescargado;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of numeroDUCAImpo
         */

        public function getNumeroDUCAImpo()
        {
            return $this->numeroDUCAImpo;
        }

        /**
         * Set the value of numeroDUCAImpo
         *
         * @return  self
         */

        public function setNumeroDUCAImpo($numeroDUCAImpo)
        {
            $this->numeroDUCAImpo = $numeroDUCAImpo;

            return $this;
        }

        /**
         * Get the value of paisDestino
         */

        public function getPaisDestino()
        {
            return $this->paisDestino;
        }

        /**
         * Set the value of paisDestino
         *
         * @return  self
         */

        public function setPaisDestino($paisDestino)
        {
            $this->paisDestino = $paisDestino;

            return $this;
        }

        /**
         * Get the value of fechaDescarga
         */

        public function getFechaDescarga()
        {
            return $this->fechaDescarga;
        }

        /**
         * Set the value of fechaDescarga
         *
         * @return  self
         */

        public function setFechaDescarga($fechaDescarga)
        {
            $this->fechaDescarga = $fechaDescarga;

            return $this;
        }

        /**
         * Get the value of pesoBrutoDescargado
         */

        public function getPesoBrutoDescargado()
        {
            return $this->pesoBrutoDescargado;
        }

        /**
         * Set the value of pesoBrutoDescargado
         *
         * @return  self
         */

        public function setPesoBrutoDescargado($pesoBrutoDescargado)
        {
            $this->pesoBrutoDescargado = $pesoBrutoDescargado;

            return $this;
        }
    } ?>

