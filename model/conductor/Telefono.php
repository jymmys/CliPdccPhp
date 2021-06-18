
/*/
@Yimis Torreglosa Diaz
/*/
<?php class Telefono
{
    private string $MOVIL;
    private string $FIJO;

    /**
     * Get the value of MOVIL
     */

    public function getMOVIL()
    {
        return $this->MOVIL;
    }

    /**
     * Set the value of MOVIL
     *
     * @return  self
     */

    public function setMOVIL($MOVIL)
    {
        $this->MOVIL = $MOVIL;

        return $this;
    }

    /**
     * Get the value of FIJO
     */

    public function getFIJO()
    {
        return $this->FIJO;
    }

    /**
     * Set the value of FIJO
     *
     * @return  self
     */

    public function setFIJO($FIJO)
    {
        $this->FIJO = $FIJO;

        return $this;
    }
} ?>

