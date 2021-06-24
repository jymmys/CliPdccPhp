/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class PermisoFitosanitarioActualizarRq
    {
        //VARIABLES
        private $Encabezado;
        private $Dato;
        private $tipoOperacion;

        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of Encabezado
         */

        public function getEncabezado()
        {
            return $this->Encabezado;
        }

        /**
         * Set the value of Encabezado
         *
         * @return  self
         */

        public function setEncabezado($Encabezado)
        {
            $this->Encabezado = $Encabezado;

            return $this;
        }

        /**
         * Get the value of Dato
         */

        public function getDato()
        {
            return $this->Dato;
        }

        /**
         * Set the value of Dato
         *
         * @return  self
         */

        public function setDato($Dato)
        {
            $this->Dato = $Dato;

            return $this;
        }

        /**
         * Get the value of tipoOperacion
         */

        public function getTipoOperacion()
        {
            return $this->tipoOperacion;
        }

        /**
         * Set the value of tipoOperacion
         *
         * @return  self
         */

        public function setTipoOperacion($tipoOperacion)
        {
            $this->tipoOperacion = $tipoOperacion;

            return $this;
        }
    }
 ?>

