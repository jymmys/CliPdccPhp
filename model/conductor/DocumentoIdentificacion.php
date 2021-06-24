/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class DocumnetoIdentificacion
    {
        //Variables
        private $TIPO;
        private $NUMERO;
        private $PAIS_DE_EMISION;
        private $FECHA_VENCIMIENTO;


        //Constructor
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of TIPO
         */

        public function getTIPO()
        {
            return $this->TIPO;
        }

        /**
         * Set the value of TIPO
         *
         * @return  self
         */

        public function setTIPO($TIPO)
        {
            $this->TIPO = $TIPO;

            return $this;
        }

        /**
         * Get the value of NUMERO
         */

        public function getNUMERO()
        {
            return $this->NUMERO;
        }

        /**
         * Set the value of NUMERO
         *
         * @return  self
         */

        public function setNUMERO($NUMERO)
        {
            $this->NUMERO = $NUMERO;

            return $this;
        }

        /**
         * Get the value of PAIS_DE_EMISION
         */

        public function getPAIS_DE_EMISION()
        {
            return $this->PAIS_DE_EMISION;
        }

        /**
         * Set the value of PAIS_DE_EMISION
         *
         * @return  self
         */

        public function setPAIS_DE_EMISION($PAIS_DE_EMISION)
        {
            $this->PAIS_DE_EMISION = $PAIS_DE_EMISION;

            return $this;
        }

        /**
         * Get the value of FECHA_VENCIMIENTO
         */

        public function getFECHA_VENCIMIENTO()
        {
            return $this->FECHA_VENCIMIENTO;
        }

        /**
         * Set the value of FECHA_VENCIMIENTO
         *
         * @return  self
         */

        public function setFECHA_VENCIMIENTO($FECHA_VENCIMIENTO)
        {
            $this->FECHA_VENCIMIENTO = $FECHA_VENCIMIENTO;

            return $this;
        }
    }
?>
