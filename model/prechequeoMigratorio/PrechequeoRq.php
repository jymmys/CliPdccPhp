/*/
@Yimis Torreglosa Diaz
/*/
<?php class PrechequeoRq
{
    //VARIABLES
    private $consecutivo;
    private $paisNotifica;
    private $paisesNotificados;
    private $documentoReferencia;
    private $codigoConductor;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of consecutivo
     */

    public function getConsecutivo()
    {
        return $this->consecutivo;
    }

    /**
     * Set the value of consecutivo
     *
     * @return  self
     */

    public function setConsecutivo($consecutivo)
    {
        $this->consecutivo = $consecutivo;

        return $this;
    }

    /**
     * Get the value of paisNotifica
     */

    public function getPaisNotifica()
    {
        return $this->paisNotifica;
    }

    /**
     * Set the value of paisNotifica
     *
     * @return  self
     */

    public function setPaisNotifica($paisNotifica)
    {
        $this->paisNotifica = $paisNotifica;

        return $this;
    }

    /**
     * Get the value of paisesNotificados
     */

    public function getPaisesNotificados()
    {
        return $this->paisesNotificados;
    }

    /**
     * Set the value of paisesNotificados
     *
     * @return  self
     */

    public function setPaisesNotificados($paisesNotificados)
    {
        $this->paisesNotificados = $paisesNotificados;

        return $this;
    }

    /**
     * Get the value of documentoReferencia
     */

    public function getDocumentoReferencia()
    {
        return $this->documentoReferencia;
    }

    /**
     * Set the value of documentoReferencia
     *
     * @return  self
     */

    public function setDocumentoReferencia($documentoReferencia)
    {
        $this->documentoReferencia = $documentoReferencia;

        return $this;
    }

    /**
     * Get the value of codigoConductor
     */

    public function getCodigoConductor()
    {
        return $this->codigoConductor;
    }

    /**
     * Set the value of codigoConductor
     *
     * @return  self
     */

    public function setCodigoConductor($codigoConductor)
    {
        $this->codigoConductor = $codigoConductor;

        return $this;
    }
} ?>

