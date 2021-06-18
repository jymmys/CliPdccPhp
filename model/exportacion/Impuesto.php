/*/
@Yimis Torreglosa Diaz
/*/
<?php class Impuesto
{
    //VARIABLES
    private $tipoImpuesto;
    private $regimenImpuesto;
    private $montoCalculado;
    private $montoPagar;
    private $multaPagar;
    private $otrosCargos;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of tipoImpuesto
     */

    public function getTipoImpuesto()
    {
        return $this->tipoImpuesto;
    }

    /**
     * Set the value of tipoImpuesto
     *
     * @return  self
     */

    public function setTipoImpuesto($tipoImpuesto)
    {
        $this->tipoImpuesto = $tipoImpuesto;

        return $this;
    }

    /**
     * Get the value of regimenImpuesto
     */

    public function getRegimenImpuesto()
    {
        return $this->regimenImpuesto;
    }

    /**
     * Set the value of regimenImpuesto
     *
     * @return  self
     */

    public function setRegimenImpuesto($regimenImpuesto)
    {
        $this->regimenImpuesto = $regimenImpuesto;

        return $this;
    }

    /**
     * Get the value of montoCalculado
     */

    public function getMontoCalculado()
    {
        return $this->montoCalculado;
    }

    /**
     * Set the value of montoCalculado
     *
     * @return  self
     */

    public function setMontoCalculado($montoCalculado)
    {
        $this->montoCalculado = $montoCalculado;

        return $this;
    }

    /**
     * Get the value of montoPagar
     */

    public function getMontoPagar()
    {
        return $this->montoPagar;
    }

    /**
     * Set the value of montoPagar
     *
     * @return  self
     */

    public function setMontoPagar($montoPagar)
    {
        $this->montoPagar = $montoPagar;

        return $this;
    }

    /**
     * Get the value of multaPagar
     */

    public function getMultaPagar()
    {
        return $this->multaPagar;
    }

    /**
     * Set the value of multaPagar
     *
     * @return  self
     */

    public function setMultaPagar($multaPagar)
    {
        $this->multaPagar = $multaPagar;

        return $this;
    }

    /**
     * Get the value of otrosCargos
     */

    public function getOtrosCargos()
    {
        return $this->otrosCargos;
    }

    /**
     * Set the value of otrosCargos
     *
     * @return  self
     */

    public function setOtrosCargos($otrosCargos)
    {
        $this->otrosCargos = $otrosCargos;

        return $this;
    }
} ?>

