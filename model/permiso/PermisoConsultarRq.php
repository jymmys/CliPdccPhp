/*/
@Yimis Torreglosa Diaz
/*/
<?php class PermisoConsultarRq
{
    //VARIABLES
    private $tipoCertificado;
    private $correlativoTransaccion;
    private $paisProcedencia;
    private $paisRecibe;
    private $tipoOperacion;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of tipoCertificado
     */

    public function getTipoCertificado()
    {
        return $this->tipoCertificado;
    }

    /**
     * Set the value of tipoCertificado
     *
     * @return  self
     */

    public function setTipoCertificado($tipoCertificado)
    {
        $this->tipoCertificado = $tipoCertificado;

        return $this;
    }

    /**
     * Get the value of correlativoTransaccion
     */

    public function getCorrelativoTransaccion()
    {
        return $this->correlativoTransaccion;
    }

    /**
     * Set the value of correlativoTransaccion
     *
     * @return  self
     */

    public function setCorrelativoTransaccion($correlativoTransaccion)
    {
        $this->correlativoTransaccion = $correlativoTransaccion;

        return $this;
    }

    /**
     * Get the value of paisProcedencia
     */

    public function getPaisProcedencia()
    {
        return $this->paisProcedencia;
    }

    /**
     * Set the value of paisProcedencia
     *
     * @return  self
     */

    public function setPaisProcedencia($paisProcedencia)
    {
        $this->paisProcedencia = $paisProcedencia;

        return $this;
    }

    /**
     * Get the value of paisRecibe
     */

    public function getPaisRecibe()
    {
        return $this->paisRecibe;
    }

    /**
     * Set the value of paisRecibe
     *
     * @return  self
     */

    public function setPaisRecibe($paisRecibe)
    {
        $this->paisRecibe = $paisRecibe;

        return $this;
    }

    /**
     * Get the value of tipoOperacion
     */

    public function getTipoOperacion()
    {
        return $this->tipoOperacion;
    }

    /**
     * Set the value of tipoOperacion
     *
     * @return  self
     */

    public function setTipoOperacion($tipoOperacion)
    {
        $this->tipoOperacion = $tipoOperacion;

        return $this;
    }
} ?>

