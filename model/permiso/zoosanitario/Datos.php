/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Datos
    {
            
        //VARIABLES
        private $exportadorIdTributaria;
        private $exportadorNombre;
        private $exportadorDireccion;
        private $exportadorTelefono;
        private $exportadorEmail;
        private $exportadorTipoDocumento;
        private $importadorIdTributaria;
        private $importadorNombre;
        private $importadorDireccion;
        private $importadorTelefono;
        private $importadorEmail;
        private $importadorTipoDocumento;
        private $establecimientoProductor;
        private $establecimientoProcesador;
        private $paisOrigen;
        private $paisDestino;
        private $puntoSalida;
        private $puntoIngreso;
        private $fechaHoraSalida;
        private $modalidadTransporte;
        private $identificacionTransporte;
        private $marcharmoPrecintos;
        private $fechaExpedicion;
        private $fechaVencimiento;
        private $observaciones;
        private $nombreCargoFuncionario;
        private $estado;
        private $Detalle = array();
        
    
        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS


        /**
         * Get the value of exportadorIdTributaria
         */
        public function getExportadorIdTributaria()
        {
            return $this->exportadorIdTributaria;
        }

        /**
         * Set the value of exportadorIdTributaria
         *
         * @return  self
         */
        public function setExportadorIdTributaria($exportadorIdTributaria)
        {
            $this->exportadorIdTributaria = $exportadorIdTributaria;

            return $this;
        }

        /**
         * Get the value of exportadorNombre
         */
        public function getExportadorNombre()
        {
            return $this->exportadorNombre;
        }

        /**
         * Set the value of exportadorNombre
         *
         * @return  self
         */
        public function setExportadorNombre($exportadorNombre)
        {
            $this->exportadorNombre = $exportadorNombre;

            return $this;
        }

        /**
         * Get the value of exportadorDireccion
         */
        public function getExportadorDireccion()
        {
            return $this->exportadorDireccion;
        }

        /**
         * Set the value of exportadorDireccion
         *
         * @return  self
         */
        public function setExportadorDireccion($exportadorDireccion)
        {
            $this->exportadorDireccion = $exportadorDireccion;

            return $this;
        }

        /**
         * Get the value of exportadorTelefono
         */
        public function getExportadorTelefono()
        {
            return $this->exportadorTelefono;
        }

        /**
         * Set the value of exportadorTelefono
         *
         * @return  self
         */
        public function setExportadorTelefono($exportadorTelefono)
        {
            $this->exportadorTelefono = $exportadorTelefono;

            return $this;
        }

        /**
         * Get the value of exportadorEmail
         */
        public function getExportadorEmail()
        {
            return $this->exportadorEmail;
        }

        /**
         * Set the value of exportadorEmail
         *
         * @return  self
         */
        public function setExportadorEmail($exportadorEmail)
        {
            $this->exportadorEmail = $exportadorEmail;

            return $this;
        }

        /**
         * Get the value of exportadorTipoDocumento
         */
        public function getExportadorTipoDocumento()
        {
            return $this->exportadorTipoDocumento;
        }

        /**
         * Set the value of exportadorTipoDocumento
         *
         * @return  self
         */
        public function setExportadorTipoDocumento($exportadorTipoDocumento)
        {
            $this->exportadorTipoDocumento = $exportadorTipoDocumento;

            return $this;
        }

        /**
         * Get the value of importadorIdTributaria
         */
        public function getImportadorIdTributaria()
        {
            return $this->importadorIdTributaria;
        }

        /**
         * Set the value of importadorIdTributaria
         *
         * @return  self
         */
        public function setImportadorIdTributaria($importadorIdTributaria)
        {
            $this->importadorIdTributaria = $importadorIdTributaria;

            return $this;
        }

        /**
         * Get the value of importadorNombre
         */
        public function getImportadorNombre()
        {
            return $this->importadorNombre;
        }

        /**
         * Set the value of importadorNombre
         *
         * @return  self
         */
        public function setImportadorNombre($importadorNombre)
        {
            $this->importadorNombre = $importadorNombre;

            return $this;
        }

        /**
         * Get the value of importadorDireccion
         */
        public function getImportadorDireccion()
        {
            return $this->importadorDireccion;
        }

        /**
         * Set the value of importadorDireccion
         *
         * @return  self
         */
        public function setImportadorDireccion($importadorDireccion)
        {
            $this->importadorDireccion = $importadorDireccion;

            return $this;
        }

        /**
         * Get the value of importadorTelefono
         */
        public function getImportadorTelefono()
        {
            return $this->importadorTelefono;
        }

        /**
         * Set the value of importadorTelefono
         *
         * @return  self
         */
        public function setImportadorTelefono($importadorTelefono)
        {
            $this->importadorTelefono = $importadorTelefono;

            return $this;
        }

        /**
         * Get the value of importadorEmail
         */
        public function getImportadorEmail()
        {
            return $this->importadorEmail;
        }

        /**
         * Set the value of importadorEmail
         *
         * @return  self
         */
        public function setImportadorEmail($importadorEmail)
        {
            $this->importadorEmail = $importadorEmail;

            return $this;
        }

        /**
         * Get the value of importadorTipoDocumento
         */
        public function getImportadorTipoDocumento()
        {
            return $this->importadorTipoDocumento;
        }

        /**
         * Set the value of importadorTipoDocumento
         *
         * @return  self
         */
        public function setImportadorTipoDocumento($importadorTipoDocumento)
        {
            $this->importadorTipoDocumento = $importadorTipoDocumento;

            return $this;
        }

        /**
         * Get the value of establecimientoProductor
         */
        public function getEstablecimientoProductor()
        {
            return $this->establecimientoProductor;
        }

        /**
         * Set the value of establecimientoProductor
         *
         * @return  self
         */
        public function setEstablecimientoProductor($establecimientoProductor)
        {
            $this->establecimientoProductor = $establecimientoProductor;

            return $this;
        }

        /**
         * Get the value of establecimientoProcesador
         */
        public function getEstablecimientoProcesador()
        {
            return $this->establecimientoProcesador;
        }

        /**
         * Set the value of establecimientoProcesador
         *
         * @return  self
         */
        public function setEstablecimientoProcesador($establecimientoProcesador)
        {
            $this->establecimientoProcesador = $establecimientoProcesador;

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
         * Get the value of puntoSalida
         */
        public function getPuntoSalida()
        {
            return $this->puntoSalida;
        }

        /**
         * Set the value of puntoSalida
         *
         * @return  self
         */
        public function setPuntoSalida($puntoSalida)
        {
            $this->puntoSalida = $puntoSalida;

            return $this;
        }

        /**
         * Get the value of puntoIngreso
         */
        public function getPuntoIngreso()
        {
            return $this->puntoIngreso;
        }

        /**
         * Set the value of puntoIngreso
         *
         * @return  self
         */
        public function setPuntoIngreso($puntoIngreso)
        {
            $this->puntoIngreso = $puntoIngreso;

            return $this;
        }

        /**
         * Get the value of fechaHoraSalida
         */
        public function getFechaHoraSalida()
        {
            return $this->fechaHoraSalida;
        }

        /**
         * Set the value of fechaHoraSalida
         *
         * @return  self
         */
        public function setFechaHoraSalida($fechaHoraSalida)
        {
            $this->fechaHoraSalida = $fechaHoraSalida;

            return $this;
        }

        /**
         * Get the value of modalidadTransporte
         */
        public function getModalidadTransporte()
        {
            return $this->modalidadTransporte;
        }

        /**
         * Set the value of modalidadTransporte
         *
         * @return  self
         */
        public function setModalidadTransporte($modalidadTransporte)
        {
            $this->modalidadTransporte = $modalidadTransporte;

            return $this;
        }

        /**
         * Get the value of identificacionTransporte
         */
        public function getIdentificacionTransporte()
        {
            return $this->identificacionTransporte;
        }

        /**
         * Set the value of identificacionTransporte
         *
         * @return  self
         */
        public function setIdentificacionTransporte($identificacionTransporte)
        {
            $this->identificacionTransporte = $identificacionTransporte;

            return $this;
        }

        /**
         * Get the value of marcharmoPrecintos
         */
        public function getMarcharmoPrecintos()
        {
            return $this->marcharmoPrecintos;
        }

        /**
         * Set the value of marcharmoPrecintos
         *
         * @return  self
         */
        public function setMarcharmoPrecintos($marcharmoPrecintos)
        {
            $this->marcharmoPrecintos = $marcharmoPrecintos;

            return $this;
        }

        /**
         * Get the value of fechaExpedicion
         */
        public function getFechaExpedicion()
        {
            return $this->fechaExpedicion;
        }

        /**
         * Set the value of fechaExpedicion
         *
         * @return  self
         */
        public function setFechaExpedicion($fechaExpedicion)
        {
            $this->fechaExpedicion = $fechaExpedicion;

            return $this;
        }

        /**
         * Get the value of fechaVencimiento
         */
        public function getFechaVencimiento()
        {
            return $this->fechaVencimiento;
        }

        /**
         * Set the value of fechaVencimiento
         *
         * @return  self
         */
        public function setFechaVencimiento($fechaVencimiento)
        {
            $this->fechaVencimiento = $fechaVencimiento;

            return $this;
        }

        /**
         * Get the value of observaciones
         */
        public function getObservaciones()
        {
            return $this->observaciones;
        }

        /**
         * Set the value of observaciones
         *
         * @return  self
         */
        public function setObservaciones($observaciones)
        {
            $this->observaciones = $observaciones;

            return $this;
        }

        /**
         * Get the value of nombreCargoFuncionario
         */
        public function getNombreCargoFuncionario()
        {
            return $this->nombreCargoFuncionario;
        }

        /**
         * Set the value of nombreCargoFuncionario
         *
         * @return  self
         */
        public function setNombreCargoFuncionario($nombreCargoFuncionario)
        {
            $this->nombreCargoFuncionario = $nombreCargoFuncionario;

            return $this;
        }

        /**
         * Get the value of estado
         */
        public function getEstado()
        {
            return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */
        public function setEstado($estado)
        {
            $this->estado = $estado;

            return $this;
        }

        /**
         * Get the value of Detalle
         */
        public function getDetalle()
        {
            return $this->Detalle;
        }

        /**
         * Set the value of Detalle
         *
         * @return  self
         */
        public function setDetalle($Detalle)
        {
            $this->Detalle = $Detalle;

            return $this;
        }
    }

?>
