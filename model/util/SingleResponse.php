 /*/
@Yimis Torreglosa Diaz
/*/

<?php

    class SingleResponse
    {
            
    //VARIABLES
        private $codigo;
        private $descripcion;

    
        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS


        /**
         * Get the value of codigo
         */
        public function getCodigo()
        {
            return $this->codigo;
        }

        /**
         * Set the value of codigo
         *
         * @return  self
         */
        public function setCodigo($codigo)
        {
            $this->codigo = $codigo;

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
    }

?>


