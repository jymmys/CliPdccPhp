/*/
@Yimis Torreglosa Diaz
/*/
<?php class DetalleCarga
{
    //VARIABLES
    private $pesoBrutoTotal;
    private $valorFobTotal;
    private $acuerdo;
    private $gastoTransporte;
    private $totalValorSeguro;
    private $cantidadTotalBultos;
    private $depositoDestino;
    private $zona;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of pesoBrutoTotal
     */

    public function getPesoBrutoTotal()
    {
        return $this->pesoBrutoTotal;
    }

    /**
     * Set the value of pesoBrutoTotal
     *
     * @return  self
     */

    public function setPesoBrutoTotal($pesoBrutoTotal)
    {
        $this->pesoBrutoTotal = $pesoBrutoTotal;

        return $this;
    }

    /**
     * Get the value of valorFobTotal
     */

    public function getValorFobTotal()
    {
        return $this->valorFobTotal;
    }

    /**
     * Set the value of valorFobTotal
     *
     * @return  self
     */

    public function setValorFobTotal($valorFobTotal)
    {
        $this->valorFobTotal = $valorFobTotal;

        return $this;
    }

    /**
     * Get the value of acuerdo
     */

    public function getAcuerdo()
    {
        return $this->acuerdo;
    }

    /**
     * Set the value of acuerdo
     *
     * @return  self
     */

    public function setAcuerdo($acuerdo)
    {
        $this->acuerdo = $acuerdo;

        return $this;
    }

    /**
     * Get the value of gastoTransporte
     */

    public function getGastoTransporte()
    {
        return $this->gastoTransporte;
    }

    /**
     * Set the value of gastoTransporte
     *
     * @return  self
     */

    public function setGastoTransporte($gastoTransporte)
    {
        $this->gastoTransporte = $gastoTransporte;

        return $this;
    }

    /**
     * Get the value of totalValorSeguro
     */

    public function getTotalValorSeguro()
    {
        return $this->totalValorSeguro;
    }

    /**
     * Set the value of totalValorSeguro
     *
     * @return  self
     */

    public function setTotalValorSeguro($totalValorSeguro)
    {
        $this->totalValorSeguro = $totalValorSeguro;

        return $this;
    }

    /**
     * Get the value of cantidadTotalBultos
     */

    public function getCantidadTotalBultos()
    {
        return $this->cantidadTotalBultos;
    }

    /**
     * Set the value of cantidadTotalBultos
     *
     * @return  self
     */

    public function setCantidadTotalBultos($cantidadTotalBultos)
    {
        $this->cantidadTotalBultos = $cantidadTotalBultos;

        return $this;
    }

    /**
     * Get the value of depositoDestino
     */

    public function getDepositoDestino()
    {
        return $this->depositoDestino;
    }

    /**
     * Set the value of depositoDestino
     *
     * @return  self
     */

    public function setDepositoDestino($depositoDestino)
    {
        $this->depositoDestino = $depositoDestino;

        return $this;
    }

    /**
     * Get the value of zona
     */

    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set the value of zona
     *
     * @return  self
     */

    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }
} ?>

