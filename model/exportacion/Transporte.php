//
@Yimis Torreglosa Diaz
//
<?php class Transporte
{
    //VARIABLES
    private $codigoTransportista;
    private $numeroDocumentoTransporte;
    private $fechaDocumentoTransporte;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of codigoTransportista
     */

    public function getCodigoTransportista()
    {
        return $this->codigoTransportista;
    }

    /**
     * Set the value of codigoTransportista
     *
     * @return  self
     */

    public function setCodigoTransportista($codigoTransportista)
    {
        $this->codigoTransportista = $codigoTransportista;

        return $this;
    }

    /**
     * Get the value of numeroDocumentoTransporte
     */

    public function getNumeroDocumentoTransporte()
    {
        return $this->numeroDocumentoTransporte;
    }

    /**
     * Set the value of numeroDocumentoTransporte
     *
     * @return  self
     */

    public function setNumeroDocumentoTransporte($numeroDocumentoTransporte)
    {
        $this->numeroDocumentoTransporte = $numeroDocumentoTransporte;

        return $this;
    }

    /**
     * Get the value of fechaDocumentoTransporte
     */

    public function getFechaDocumentoTransporte()
    {
        return $this->fechaDocumentoTransporte;
    }

    /**
     * Set the value of fechaDocumentoTransporte
     *
     * @return  self
     */

    public function setFechaDocumentoTransporte($fechaDocumentoTransporte)
    {
        $this->fechaDocumentoTransporte = $fechaDocumentoTransporte;

        return $this;
    }
} ?>


