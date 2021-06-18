/*/
@Yimis Torreglosa Diaz
/*/
<?php class XXXXXXX
{
    //VARIABLES
    private $numeroDocumentoEmbarque;
    private $fechaConocimientoEmbarque;
    private $cantidadTotal;
    private $pesoBrutoManifestado;
    private $pesoBrutoTotalCargado;
    private $numeroConocimientoEmbarqueMaster;
    private $tipoEmpaque;
    private $consignatario;
    private $direccionConsignatario;
    private $exportador;
    private $direccion;
    private $lugarEmbarque;
    private $lugarDesembarque;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of numeroDocumentoEmbarque
     */

    public function getNumeroDocumentoEmbarque()
    {
        return $this->numeroDocumentoEmbarque;
    }

    /**
     * Set the value of numeroDocumentoEmbarque
     *
     * @return  self
     */

    public function setNumeroDocumentoEmbarque($numeroDocumentoEmbarque)
    {
        $this->numeroDocumentoEmbarque = $numeroDocumentoEmbarque;

        return $this;
    }

    /**
     * Get the value of fechaConocimientoEmbarque
     */

    public function getFechaConocimientoEmbarque()
    {
        return $this->fechaConocimientoEmbarque;
    }

    /**
     * Set the value of fechaConocimientoEmbarque
     *
     * @return  self
     */

    public function setFechaConocimientoEmbarque($fechaConocimientoEmbarque)
    {
        $this->fechaConocimientoEmbarque = $fechaConocimientoEmbarque;

        return $this;
    }

    /**
     * Get the value of cantidadTotal
     */

    public function getCantidadTotal()
    {
        return $this->cantidadTotal;
    }

    /**
     * Set the value of cantidadTotal
     *
     * @return  self
     */

    public function setCantidadTotal($cantidadTotal)
    {
        $this->cantidadTotal = $cantidadTotal;

        return $this;
    }

    /**
     * Get the value of pesoBrutoManifestado
     */

    public function getPesoBrutoManifestado()
    {
        return $this->pesoBrutoManifestado;
    }

    /**
     * Set the value of pesoBrutoManifestado
     *
     * @return  self
     */

    public function setPesoBrutoManifestado($pesoBrutoManifestado)
    {
        $this->pesoBrutoManifestado = $pesoBrutoManifestado;

        return $this;
    }

    /**
     * Get the value of pesoBrutoTotalCargado
     */

    public function getPesoBrutoTotalCargado()
    {
        return $this->pesoBrutoTotalCargado;
    }

    /**
     * Set the value of pesoBrutoTotalCargado
     *
     * @return  self
     */

    public function setPesoBrutoTotalCargado($pesoBrutoTotalCargado)
    {
        $this->pesoBrutoTotalCargado = $pesoBrutoTotalCargado;

        return $this;
    }

    /**
     * Get the value of numeroConocimientoEmbarqueMaster
     */

    public function getNumeroConocimientoEmbarqueMaster()
    {
        return $this->numeroConocimientoEmbarqueMaster;
    }

    /**
     * Set the value of numeroConocimientoEmbarqueMaster
     *
     * @return  self
     */

    public function setNumeroConocimientoEmbarqueMaster(
        $numeroConocimientoEmbarqueMaster
    ) {
        $this->numeroConocimientoEmbarqueMaster = $numeroConocimientoEmbarqueMaster;

        return $this;
    }

    /**
     * Get the value of tipoEmpaque
     */

    public function getTipoEmpaque()
    {
        return $this->tipoEmpaque;
    }

    /**
     * Set the value of tipoEmpaque
     *
     * @return  self
     */

    public function setTipoEmpaque($tipoEmpaque)
    {
        $this->tipoEmpaque = $tipoEmpaque;

        return $this;
    }

    /**
     * Get the value of consignatario
     */

    public function getConsignatario()
    {
        return $this->consignatario;
    }

    /**
     * Set the value of consignatario
     *
     * @return  self
     */

    public function setConsignatario($consignatario)
    {
        $this->consignatario = $consignatario;

        return $this;
    }

    /**
     * Get the value of direccionConsignatario
     */

    public function getDireccionConsignatario()
    {
        return $this->direccionConsignatario;
    }

    /**
     * Set the value of direccionConsignatario
     *
     * @return  self
     */

    public function setDireccionConsignatario($direccionConsignatario)
    {
        $this->direccionConsignatario = $direccionConsignatario;

        return $this;
    }

    /**
     * Get the value of exportador
     */

    public function getExportador()
    {
        return $this->exportador;
    }

    /**
     * Set the value of exportador
     *
     * @return  self
     */

    public function setExportador($exportador)
    {
        $this->exportador = $exportador;

        return $this;
    }

    /**
     * Get the value of direccion
     */

    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of lugarEmbarque
     */

    public function getLugarEmbarque()
    {
        return $this->lugarEmbarque;
    }

    /**
     * Set the value of lugarEmbarque
     *
     * @return  self
     */

    public function setLugarEmbarque($lugarEmbarque)
    {
        $this->lugarEmbarque = $lugarEmbarque;

        return $this;
    }

    /**
     * Get the value of lugarDesembarque
     */

    public function getLugarDesembarque()
    {
        return $this->lugarDesembarque;
    }

    /**
     * Set the value of lugarDesembarque
     *
     * @return  self
     */

    public function setLugarDesembarque($lugarDesembarque)
    {
        $this->lugarDesembarque = $lugarDesembarque;

        return $this;
    }
} ?>


