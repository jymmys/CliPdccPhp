/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Conductor
    {
        private $CODIGO_CONDUCTOR;
        private $CODIGO_TRANSPORTISTA;
        private $INFORMACION_GENERAL;
        private $DOCUMENTOS_DE_IDENTIFICACION = array();
        private $LICENCIA_CONDUCTOR;
        private $TELEFONO;
        private $CORREO_ELECTRONICO;
        private $FECHA_AUTORIZACION;
        private $TRANSPORTISTA = array();

        //Constructor
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        /**
         * Get the value of CODIGO_CONDUCTOR
         */
        public function getCODIGO_CONDUCTOR()
        {
            return $this->CODIGO_CONDUCTOR;
        }

        /**
         * Set the value of CODIGO_CONDUCTOR
         *
         * @return  self
         */
        public function setCODIGO_CONDUCTOR($CODIGO_CONDUCTOR)
        {
            $this->CODIGO_CONDUCTOR = $CODIGO_CONDUCTOR;

            return $this;
        }
        /**
         * Get the value of CODIGO_TRANSPORTISTA
         */
        public function getCODIGO_TRANSPORTISTA()
        {
            return $this->CODIGO_TRANSPORTISTA;
        }

        /**
         * Set the value of CODIGO_TRANSPORTISTA
         *
         * @return  self
         */
        public function setCODIGO_TRANSPORTISTA($CODIGO_TRANSPORTISTA)
        {
            $this->CODIGO_TRANSPORTISTA = $CODIGO_TRANSPORTISTA;

            return $this;
        }

        /**
         * Get the value of INFORMACION_GENERAL
         */
        public function getINFORMACION_GENERAL()
        {
            return $this->INFORMACION_GENERAL;
        }

        /**
         * Set the value of INFORMACION_GENERAL
         *
         * @return  self
         */
        public function setINFORMACION_GENERAL($INFORMACION_GENERAL)
        {
            $this->INFORMACION_GENERAL = $INFORMACION_GENERAL;

            return $this;
        }

        /**
         * Get the value of DOCUMENTOS_DE_IDENTIFICACION
         */
        public function getDOCUMENTOS_DE_IDENTIFICACION()
        {
            return $this->DOCUMENTOS_DE_IDENTIFICACION;
        }

        /**
         * Set the value of DOCUMENTOS_DE_IDENTIFICACION
         *
         * @return  self
         */
        public function setDOCUMENTOS_DE_IDENTIFICACION($DOCUMENTOS_DE_IDENTIFICACION)
        {
            $this->DOCUMENTOS_DE_IDENTIFICACION = $DOCUMENTOS_DE_IDENTIFICACION;

            return $this;
        }

        /**
         * Get the value of LICENCIA_CONDUCTOR
         */
        public function getLICENCIA_CONDUCTOR()
        {
            return $this->LICENCIA_CONDUCTOR;
        }

        /**
         * Set the value of LICENCIA_CONDUCTOR
         *
         * @return  self
         */
        public function setLICENCIA_CONDUCTOR($LICENCIA_CONDUCTOR)
        {
            $this->LICENCIA_CONDUCTOR = $LICENCIA_CONDUCTOR;

            return $this;
        }

        /**
         * Get the value of TELEFONO
         */
        public function getTELEFONO()
        {
            return $this->TELEFONO;
        }

        /**
         * Set the value of TELEFONO
         *
         * @return  self
         */
        public function setTELEFONO($TELEFONO)
        {
            $this->TELEFONO = $TELEFONO;

            return $this;
        }

        /**
         * Get the value of CORREO_ELECTRONICO
         */
        public function getCORREO_ELECTRONICO()
        {
            return $this->CORREO_ELECTRONICO;
        }

        /**
         * Set the value of CORREO_ELECTRONICO
         *
         * @return  self
         */
        public function setCORREO_ELECTRONICO($CORREO_ELECTRONICO)
        {
            $this->CORREO_ELECTRONICO = $CORREO_ELECTRONICO;

            return $this;
        }

        /**
         * Get the value of FECHA_AUTORIZACION
         */
        public function getFECHA_AUTORIZACION()
        {
            return $this->FECHA_AUTORIZACION;
        }

        /**
         * Set the value of FECHA_AUTORIZACION
         *
         * @return  self
         */
        public function setFECHA_AUTORIZACION($FECHA_AUTORIZACION)
        {
            $this->FECHA_AUTORIZACION = $FECHA_AUTORIZACION;

            return $this;
        }

        /**
         * Get the value of TRANSPORTISTA
         */
        public function getTRANSPORTISTA()
        {
            return $this->TRANSPORTISTA;
        }

        /**
         * Set the value of TRANSPORTISTA
         *
         * @return  self
         */
        public function setTRANSPORTISTA($TRANSPORTISTA)
        {
            $this->TRANSPORTISTA = $TRANSPORTISTA;

            return $this;
        }
    }


?>