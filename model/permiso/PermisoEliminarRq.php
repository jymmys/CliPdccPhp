/*/
@Yimis Torreglosa Diaz
/*/
<?php class PermisoEliminarRq
{
    //VARIABLES
    private $estado;
    private $tipoCertificado;
    private $correlativoTransaccion;
    private $paisRecibe;
    private $fechaHoraEnvio;
    private $ministerio;
    private $direccion;
    private $departamento;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of estado
     */

    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */

    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

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
     * Get the value of fechaHoraEnvio
     */

    public function getFechaHoraEnvio()
    {
        return $this->fechaHoraEnvio;
    }

    /**
     * Set the value of fechaHoraEnvio
     *
     * @return  self
     */

    public function setFechaHoraEnvio($fechaHoraEnvio)
    {
        $this->fechaHoraEnvio = $fechaHoraEnvio;

        return $this;
    }

    /**
     * Get the value of ministerio
     */

    public function getMinisterio()
    {
        return $this->ministerio;
    }

    /**
     * Set the value of ministerio
     *
     * @return  self
     */

    public function setMinisterio($ministerio)
    {
        $this->ministerio = $ministerio;

        return $this;
    }

    /**
     * Get the value of direccion
     */

    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of departamento
     */

    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set the value of departamento
     *
     * @return  self
     */

    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }
}

?>
