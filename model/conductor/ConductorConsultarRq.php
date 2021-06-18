/*/
@Yimis Torreglosa Diaz
/*/
<?php class ConductorConsultarRq
{
    private $CODIGO_CONDUCTOR;

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
} ?>


