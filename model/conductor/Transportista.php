/*/
@Yimis Torreglosa Diaz
/*/
<?php class Transportista
{
    private string $CODIGO_TRANSPORTISTA;
    private string $TIPO_DOCUMENTO;
    private string $NUMERO_IDENTIFICACION;
    private string $RAZON_SOCIAL;

    //Constructor
    public function __construct()
    {
        //
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

    /**
     * Get the value of TIPO_DOCUMENTO
     */

    public function getTIPO_DOCUMENTO()
    {
        return $this->TIPO_DOCUMENTO;
    }

    /**
     * Set the value of TIPO_DOCUMENTO
     *
     * @return  self
     */

    public function setTIPO_DOCUMENTO($TIPO_DOCUMENTO)
    {
        $this->TIPO_DOCUMENTO = $TIPO_DOCUMENTO;

        return $this;
    }

    /**
     * Get the value of NUMERO_IDENTIFICACION
     */

    public function getNUMERO_IDENTIFICACION()
    {
        return $this->NUMERO_IDENTIFICACION;
    }

    /**
     * Set the value of NUMERO_IDENTIFICACION
     *
     * @return  self
     */

    public function setNUMERO_IDENTIFICACION($NUMERO_IDENTIFICACION)
    {
        $this->NUMERO_IDENTIFICACION = $NUMERO_IDENTIFICACION;

        return $this;
    }

    /**
     * Get the value of RAZON_SOCIAL
     */

    public function getRAZON_SOCIAL()
    {
        return $this->RAZON_SOCIAL;
    }

    /**
     * Set the value of RAZON_SOCIAL
     *
     * @return  self
     */

    public function setRAZON_SOCIAL($RAZON_SOCIAL)
    {
        $this->RAZON_SOCIAL = $RAZON_SOCIAL;

        return $this;
    }
} ?>



