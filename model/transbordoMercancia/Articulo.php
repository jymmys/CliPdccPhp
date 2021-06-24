/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Articulo
    {
        //VARIABLES
        private $cantidad;
        private $cantidadUnidad;
        private $codigoArancelario;
        private $descripcion;
        private $descripcionMercancia;
        private $numero;
        private $pais;
        private $pesoBrutoMercancia;
        private $tipoCarga;
        private $valorFob;
        private $volumenBruto;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of cantidad
         */

        public function getCantidad()
        {
            return $this->cantidad;
        }

        /**
         * Set the value of cantidad
         *
         * @return  self
         */

        public function setCantidad($cantidad)
        {
            $this->cantidad = $cantidad;

            return $this;
        }

        /**
         * Get the value of cantidadUnidad
         */

        public function getCantidadUnidad()
        {
            return $this->cantidadUnidad;
        }

        /**
         * Set the value of cantidadUnidad
         *
         * @return  self
         */

        public function setCantidadUnidad($cantidadUnidad)
        {
            $this->cantidadUnidad = $cantidadUnidad;

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
         * Get the value of descripcionMercancia
         */

        public function getDescripcionMercancia()
        {
            return $this->descripcionMercancia;
        }

        /**
         * Set the value of descripcionMercancia
         *
         * @return  self
         */

        public function setDescripcionMercancia($descripcionMercancia)
        {
            $this->descripcionMercancia = $descripcionMercancia;

            return $this;
        }

        /**
         * Get the value of numero
         */

        public function getNumero()
        {
            return $this->numero;
        }

        /**
         * Set the value of numero
         *
         * @return  self
         */

        public function setNumero($numero)
        {
            $this->numero = $numero;

            return $this;
        }

        /**
         * Get the value of pais
         */

        public function getPais()
        {
            return $this->pais;
        }

        /**
         * Set the value of pais
         *
         * @return  self
         */

        public function setPais($pais)
        {
            $this->pais = $pais;

            return $this;
        }

        /**
         * Get the value of pesoBrutoMercancia
         */

        public function getPesoBrutoMercancia()
        {
            return $this->pesoBrutoMercancia;
        }

        /**
         * Set the value of pesoBrutoMercancia
         *
         * @return  self
         */

        public function setPesoBrutoMercancia($pesoBrutoMercancia)
        {
            $this->pesoBrutoMercancia = $pesoBrutoMercancia;

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
         * Get the value of valorFob
         */

        public function getValorFob()
        {
            return $this->valorFob;
        }

        /**
         * Set the value of valorFob
         *
         * @return  self
         */

        public function setValorFob($valorFob)
        {
            $this->valorFob = $valorFob;

            return $this;
        }

        /**
         * Get the value of volumenBruto
         */

        public function getVolumenBruto()
        {
            return $this->volumenBruto;
        }

        /**
         * Set the value of volumenBruto
         *
         * @return  self
         */

        public function setVolumenBruto($volumenBruto)
        {
            $this->volumenBruto = $volumenBruto;

            return $this;
        }
    }

?>

