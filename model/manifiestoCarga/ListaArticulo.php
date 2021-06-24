/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class ListaArticulo
    {
        //VARIABLES
        private $numero;
        private $descripcion;
        private $codigoArancelario;
        private $paisOrigen;
        private $tipoCarga;
        private $cantidadUnidades;
        private $cantidadCargada;
        private $pesoBruto;
        private $volumenBruto;
        private $valorDeclarado;
        private $codigoMercanciaPeligrosa;
        private $Articulo = array();

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

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
         * Get the value of paisOrigen
         */

        public function getPaisOrigen()
        {
            return $this->paisOrigen;
        }

        /**
         * Set the value of paisOrigen
         *
         * @return  self
         */

        public function setPaisOrigen($paisOrigen)
        {
            $this->paisOrigen = $paisOrigen;

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
         * Get the value of cantidadUnidades
         */

        public function getCantidadUnidades()
        {
            return $this->cantidadUnidades;
        }

        /**
         * Set the value of cantidadUnidades
         *
         * @return  self
         */

        public function setCantidadUnidades($cantidadUnidades)
        {
            $this->cantidadUnidades = $cantidadUnidades;

            return $this;
        }

        /**
         * Get the value of cantidadCargada
         */

        public function getCantidadCargada()
        {
            return $this->cantidadCargada;
        }

        /**
         * Set the value of cantidadCargada
         *
         * @return  self
         */

        public function setCantidadCargada($cantidadCargada)
        {
            $this->cantidadCargada = $cantidadCargada;

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

        /**
         * Get the value of valorDeclarado
         */

        public function getValorDeclarado()
        {
            return $this->valorDeclarado;
        }

        /**
         * Set the value of valorDeclarado
         *
         * @return  self
         */

        public function setValorDeclarado($valorDeclarado)
        {
            $this->valorDeclarado = $valorDeclarado;

            return $this;
        }

        /**
         * Get the value of codigoMercanciaPeligrosa
         */

        public function getCodigoMercanciaPeligrosa()
        {
            return $this->codigoMercanciaPeligrosa;
        }

        /**
         * Set the value of codigoMercanciaPeligrosa
         *
         * @return  self
         */

        public function setCodigoMercanciaPeligrosa($codigoMercanciaPeligrosa)
        {
            $this->codigoMercanciaPeligrosa = $codigoMercanciaPeligrosa;

            return $this;
        }

        /**
         * Get the value of Articulo
         */

        public function getArticulo()
        {
            return $this->Articulo;
        }

        /**
         * Set the value of Articulo
         *
         * @return  self
         */

        public function setArticulo($Articulo)
        {
            $this->Articulo = $Articulo;

            return $this;
        }
    } ?>

