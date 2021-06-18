/*/
@Yimis Torreglosa Diaz
/*/
<?php class Datos
{
    //VARIABLES
    private $lugarEmision;
    private $fechaEmision;
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
    private $paisOrigen;
    private $paisDestino;
    private $puntoSalida;
    private $puntoIngreso;
    private $modalidadTransporte;
    private $empresaTransportista;
    private $identificacionTransporte;
    private $marcharmoOficial;
    private $inspeccionLugar;
    private $inspeccionFecha;
    private $periodoValidez;
    private $nombreInspector;
    private $declaracionAdicional;
    private $TratamientoAplicado;
    private $estado;
    private $Detalle = [[]]			 //PENDIENTE

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of lugarEmision
     */

    public function getLugarEmision()
    {
        return $this->lugarEmision;
    }

    /**
     * Set the value of lugarEmision
     *
     * @return  self
     */

    public function setLugarEmision($lugarEmision)
    {
        $this->lugarEmision = $lugarEmision;

        return $this;
    }

    /**
     * Get the value of fechaEmision
     */

    public function getFechaEmision()
    {
        return $this->fechaEmision;
    }

    /**
     * Set the value of fechaEmision
     *
     * @return  self
     */

    public function setFechaEmision($fechaEmision)
    {
        $this->fechaEmision = $fechaEmision;

        return $this;
    }

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
     * Get the value of empresaTransportista
     */

    public function getEmpresaTransportista()
    {
        return $this->empresaTransportista;
    }

    /**
     * Set the value of empresaTransportista
     *
     * @return  self
     */

    public function setEmpresaTransportista($empresaTransportista)
    {
        $this->empresaTransportista = $empresaTransportista;

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
     * Get the value of marcharmoOficial
     */

    public function getMarcharmoOficial()
    {
        return $this->marcharmoOficial;
    }

    /**
     * Set the value of marcharmoOficial
     *
     * @return  self
     */

    public function setMarcharmoOficial($marcharmoOficial)
    {
        $this->marcharmoOficial = $marcharmoOficial;

        return $this;
    }

    /**
     * Get the value of inspeccionLugar
     */

    public function getInspeccionLugar()
    {
        return $this->inspeccionLugar;
    }

    /**
     * Set the value of inspeccionLugar
     *
     * @return  self
     */

    public function setInspeccionLugar($inspeccionLugar)
    {
        $this->inspeccionLugar = $inspeccionLugar;

        return $this;
    }

    /**
     * Get the value of inspeccionFecha
     */

    public function getInspeccionFecha()
    {
        return $this->inspeccionFecha;
    }

    /**
     * Set the value of inspeccionFecha
     *
     * @return  self
     */

    public function setInspeccionFecha($inspeccionFecha)
    {
        $this->inspeccionFecha = $inspeccionFecha;

        return $this;
    }

    /**
     * Get the value of periodoValidez
     */

    public function getPeriodoValidez()
    {
        return $this->periodoValidez;
    }

    /**
     * Set the value of periodoValidez
     *
     * @return  self
     */

    public function setPeriodoValidez($periodoValidez)
    {
        $this->periodoValidez = $periodoValidez;

        return $this;
    }

    /**
     * Get the value of nombreInspector
     */

    public function getNombreInspector()
    {
        return $this->nombreInspector;
    }

    /**
     * Set the value of nombreInspector
     *
     * @return  self
     */

    public function setNombreInspector($nombreInspector)
    {
        $this->nombreInspector = $nombreInspector;

        return $this;
    }

    /**
     * Get the value of declaracionAdicional
     */

    public function getDeclaracionAdicional()
    {
        return $this->declaracionAdicional;
    }

    /**
     * Set the value of declaracionAdicional
     *
     * @return  self
     */

    public function setDeclaracionAdicional($declaracionAdicional)
    {
        $this->declaracionAdicional = $declaracionAdicional;

        return $this;
    }

    /**
     * Get the value of TratamientoAplicado
     */

    public function getTratamientoAplicado()
    {
        return $this->TratamientoAplicado;
    }

    /**
     * Set the value of TratamientoAplicado
     *
     * @return  self
     */

    public function setTratamientoAplicado($TratamientoAplicado)
    {
        $this->TratamientoAplicado = $TratamientoAplicado;

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
} ?>
