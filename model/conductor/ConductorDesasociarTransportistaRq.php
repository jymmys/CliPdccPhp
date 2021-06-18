/*/
@Yimis Torreglosa Diaz
/*/
<?php class ConductorDesasociarTransportistaRq
{
    private $CODIGO_CONDUCTOR;
    private $CODIGO_TRANSPORTISTA;

    public function __construct()
    {
    }

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
} ?>


