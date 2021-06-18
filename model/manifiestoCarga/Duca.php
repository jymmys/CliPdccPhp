/*/
@Yimis Torreglosa Diaz
/*/
<?php class XXXXXXX
{
    //VARIABLES
    private $codigoPaisExpedicion;
    private $codigoPaisDestino;
    private $pesoBrutoTotal;
    private $numeroDuca;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of codigoPaisExpedicion
     */

    public function getCodigoPaisExpedicion()
    {
        return $this->codigoPaisExpedicion;
    }

    /**
     * Set the value of codigoPaisExpedicion
     *
     * @return  self
     */

    public function setCodigoPaisExpedicion($codigoPaisExpedicion)
    {
        $this->codigoPaisExpedicion = $codigoPaisExpedicion;

        return $this;
    }

    /**
     * Get the value of codigoPaisDestino
     */

    public function getCodigoPaisDestino()
    {
        return $this->codigoPaisDestino;
    }

    /**
     * Set the value of codigoPaisDestino
     *
     * @return  self
     */

    public function setCodigoPaisDestino($codigoPaisDestino)
    {
        $this->codigoPaisDestino = $codigoPaisDestino;

        return $this;
    }

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
     * Get the value of numeroDuca
     */

    public function getNumeroDuca()
    {
        return $this->numeroDuca;
    }

    /**
     * Set the value of numeroDuca
     *
     * @return  self
     */

    public function setNumeroDuca($numeroDuca)
    {
        $this->numeroDuca = $numeroDuca;

        return $this;
    }
} ?>


