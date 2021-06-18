/*/
@Yimis Torreglosa Diaz
/*/
<?php class DetalleTransporte
{
    //VARIABLES
    private $modoTransporte;
    private $fechaPartida;
    private $paisProcedencia;
    private $aduanaIngreso;
    private $aduanaDestino;
    private $lugarEmbarque;
    private $lugarDesembarque;
    private $fechaArribo;
    private $paisDestino;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of modoTransporte
     */

    public function getModoTransporte()
    {
        return $this->modoTransporte;
    }

    /**
     * Set the value of modoTransporte
     *
     * @return  self
     */

    public function setModoTransporte($modoTransporte)
    {
        $this->modoTransporte = $modoTransporte;

        return $this;
    }

    /**
     * Get the value of fechaPartida
     */

    public function getFechaPartida()
    {
        return $this->fechaPartida;
    }

    /**
     * Set the value of fechaPartida
     *
     * @return  self
     */

    public function setFechaPartida($fechaPartida)
    {
        $this->fechaPartida = $fechaPartida;

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
     * Get the value of aduanaIngreso
     */

    public function getAduanaIngreso()
    {
        return $this->aduanaIngreso;
    }

    /**
     * Set the value of aduanaIngreso
     *
     * @return  self
     */

    public function setAduanaIngreso($aduanaIngreso)
    {
        $this->aduanaIngreso = $aduanaIngreso;

        return $this;
    }

    /**
     * Get the value of aduanaDestino
     */

    public function getAduanaDestino()
    {
        return $this->aduanaDestino;
    }

    /**
     * Set the value of aduanaDestino
     *
     * @return  self
     */

    public function setAduanaDestino($aduanaDestino)
    {
        $this->aduanaDestino = $aduanaDestino;

        return $this;
    }

    /**
     * Get the value of lugarEmbarque
     */

    public function getLugarEmbarque()
    {
        return $this->lugarEmbarque;
    }

    /**
     * Set the value of lugarEmbarque
     *
     * @return  self
     */

    public function setLugarEmbarque($lugarEmbarque)
    {
        $this->lugarEmbarque = $lugarEmbarque;

        return $this;
    }

    /**
     * Get the value of lugarDesembarque
     */

    public function getLugarDesembarque()
    {
        return $this->lugarDesembarque;
    }

    /**
     * Set the value of lugarDesembarque
     *
     * @return  self
     */

    public function setLugarDesembarque($lugarDesembarque)
    {
        $this->lugarDesembarque = $lugarDesembarque;

        return $this;
    }

    /**
     * Get the value of fechaArribo
     */

    public function getFechaArribo()
    {
        return $this->fechaArribo;
    }

    /**
     * Set the value of fechaArribo
     *
     * @return  self
     */

    public function setFechaArribo($fechaArribo)
    {
        $this->fechaArribo = $fechaArribo;

        return $this;
    }

    /**
     * Get the value of paisDestino
     */

    public function getPaisDestino()
    {
        return $this->paisDestino;
    }

    /**
     * Set the value of paisDestino
     *
     * @return  self
     */

    public function setPaisDestino($paisDestino)
    {
        $this->paisDestino = $paisDestino;

        return $this;
    }
} ?>

