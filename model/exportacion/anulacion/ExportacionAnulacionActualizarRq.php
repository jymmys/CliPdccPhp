/*/
@Yimis Torreglosa Diaz
/*/
<?php class ExportacionAnulacionActualizarRq
{
    
    //Variable
    private Declarante $declarante;
    private Declaracion $declaracion;
    private Factura $factura;
    private Transporte $transporte;
    private DetalleCarga $detalleCarga;
    private DetalleTransporte $detalleTransporte;
    private Exportador $exportador;
    private Importador $importador;
    private $Articulo = [[]]			 //Pendiente
    private Impuesto $impuesto;
    private Pago $pago;
    private string $estado;

	//Constructor
    public function __construct()
    {
        //
    }


    /**
     * Get the value of declarante
     */ 
    public function getDeclarante()
    {
        return $this->declarante;
    }

    /**
     * Set the value of declarante
     *
     * @return  self
     */ 
    public function setDeclarante($declarante)
    {
        $this->declarante = $declarante;

        return $this;
    }

    /**
     * Get the value of declaracion
     */ 
    public function getDeclaracion()
    {
        return $this->declaracion;
    }

    /**
     * Set the value of declaracion
     *
     * @return  self
     */ 
    public function setDeclaracion($declaracion)
    {
        $this->declaracion = $declaracion;

        return $this;
    }

    /**
     * Get the value of factura
     */ 
    public function getFactura()
    {
        return $this->factura;
    }

    /**
     * Set the value of factura
     *
     * @return  self
     */ 
    public function setFactura($factura)
    {
        $this->factura = $factura;

        return $this;
    }

    /**
     * Get the value of transporte
     */ 
    public function getTransporte()
    {
        return $this->transporte;
    }

    /**
     * Set the value of transporte
     *
     * @return  self
     */ 
    public function setTransporte($transporte)
    {
        $this->transporte = $transporte;

        return $this;
    }

    /**
     * Get the value of detalleCarga
     */ 
    public function getDetalleCarga()
    {
        return $this->detalleCarga;
    }

    /**
     * Set the value of detalleCarga
     *
     * @return  self
     */ 
    public function setDetalleCarga($detalleCarga)
    {
        $this->detalleCarga = $detalleCarga;

        return $this;
    }

    /**
     * Get the value of detalleTransporte
     */ 
    public function getDetalleTransporte()
    {
        return $this->detalleTransporte;
    }

    /**
     * Set the value of detalleTransporte
     *
     * @return  self
     */ 
    public function setDetalleTransporte($detalleTransporte)
    {
        $this->detalleTransporte = $detalleTransporte;

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
     * Get the value of importador
     */ 
    public function getImportador()
    {
        return $this->importador;
    }

    /**
     * Set the value of importador
     *
     * @return  self
     */ 
    public function setImportador($importador)
    {
        $this->importador = $importador;

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

    /**
     * Get the value of impuesto
     */ 
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * Set the value of impuesto
     *
     * @return  self
     */ 
    public function setImpuesto($impuesto)
    {
        $this->impuesto = $impuesto;

        return $this;
    }

    /**
     * Get the value of pago
     */ 
    public function getPago()
    {
        return $this->pago;
    }

    /**
     * Set the value of pago
     *
     * @return  self
     */ 
    public function setPago($pago)
    {
        $this->pago = $pago;

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
}

?>
