/*/
@Yimis Torreglosa Diaz
/*/
<?php class ImportacionRectificacionActualizarRq
{
    //VARIABLES
    private $Declarante;
    private $Declaracion;
    private $Factura;
    private $Transporte;
    private $DetalleCarga;
    private $DetalleTransporte;
    private $Exportador;
    private $Importador;
    private $Articulo = [[]]		 //PENDIENTE
    private $Impuesto;
    private $Pago;
    private $String;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of Declarante
     */

    public function getDeclarante()
    {
        return $this->Declarante;
    }

    /**
     * Set the value of Declarante
     *
     * @return  self
     */

    public function setDeclarante($Declarante)
    {
        $this->Declarante = $Declarante;

        return $this;
    }

    /**
     * Get the value of Declaracion
     */

    public function getDeclaracion()
    {
        return $this->Declaracion;
    }

    /**
     * Set the value of Declaracion
     *
     * @return  self
     */

    public function setDeclaracion($Declaracion)
    {
        $this->Declaracion = $Declaracion;

        return $this;
    }

    /**
     * Get the value of Factura
     */

    public function getFactura()
    {
        return $this->Factura;
    }

    /**
     * Set the value of Factura
     *
     * @return  self
     */

    public function setFactura($Factura)
    {
        $this->Factura = $Factura;

        return $this;
    }

    /**
     * Get the value of Transporte
     */

    public function getTransporte()
    {
        return $this->Transporte;
    }

    /**
     * Set the value of Transporte
     *
     * @return  self
     */

    public function setTransporte($Transporte)
    {
        $this->Transporte = $Transporte;

        return $this;
    }

    /**
     * Get the value of DetalleCarga
     */

    public function getDetalleCarga()
    {
        return $this->DetalleCarga;
    }

    /**
     * Set the value of DetalleCarga
     *
     * @return  self
     */

    public function setDetalleCarga($DetalleCarga)
    {
        $this->DetalleCarga = $DetalleCarga;

        return $this;
    }

    /**
     * Get the value of DetalleTransporte
     */

    public function getDetalleTransporte()
    {
        return $this->DetalleTransporte;
    }

    /**
     * Set the value of DetalleTransporte
     *
     * @return  self
     */

    public function setDetalleTransporte($DetalleTransporte)
    {
        $this->DetalleTransporte = $DetalleTransporte;

        return $this;
    }

    /**
     * Get the value of Exportador
     */

    public function getExportador()
    {
        return $this->Exportador;
    }

    /**
     * Set the value of Exportador
     *
     * @return  self
     */

    public function setExportador($Exportador)
    {
        $this->Exportador = $Exportador;

        return $this;
    }

    /**
     * Get the value of Importador
     */

    public function getImportador()
    {
        return $this->Importador;
    }

    /**
     * Set the value of Importador
     *
     * @return  self
     */

    public function setImportador($Importador)
    {
        $this->Importador = $Importador;

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
     * Get the value of Impuesto
     */

    public function getImpuesto()
    {
        return $this->Impuesto;
    }

    /**
     * Set the value of Impuesto
     *
     * @return  self
     */

    public function setImpuesto($Impuesto)
    {
        $this->Impuesto = $Impuesto;

        return $this;
    }

    /**
     * Get the value of Pago
     */

    public function getPago()
    {
        return $this->Pago;
    }

    /**
     * Set the value of Pago
     *
     * @return  self
     */

    public function setPago($Pago)
    {
        $this->Pago = $Pago;

        return $this;
    }

    /**
     * Get the value of String
     */

    public function getString()
    {
        return $this->String;
    }

    /**
     * Set the value of String
     *
     * @return  self
     */

    public function setString($String)
    {
        $this->String = $String;

        return $this;
    }
}

?>
