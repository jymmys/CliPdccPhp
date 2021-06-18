/*/
@Yimis Torreglosa Diaz
/*/
<?php class Evento
{
    //VARIABLES
    private $codigoEvento;
    private $fechaEvento;
    private $paisEvento;
    private $referencia;
    private $observaciones;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of codigoEvento
     */

    public function getCodigoEvento()
    {
        return $this->codigoEvento;
    }

    /**
     * Set the value of codigoEvento
     *
     * @return  self
     */

    public function setCodigoEvento($codigoEvento)
    {
        $this->codigoEvento = $codigoEvento;

        return $this;
    }

    /**
     * Get the value of fechaEvento
     */

    public function getFechaEvento()
    {
        return $this->fechaEvento;
    }

    /**
     * Set the value of fechaEvento
     *
     * @return  self
     */

    public function setFechaEvento($fechaEvento)
    {
        $this->fechaEvento = $fechaEvento;

        return $this;
    }

    /**
     * Get the value of paisEvento
     */

    public function getPaisEvento()
    {
        return $this->paisEvento;
    }

    /**
     * Set the value of paisEvento
     *
     * @return  self
     */

    public function setPaisEvento($paisEvento)
    {
        $this->paisEvento = $paisEvento;

        return $this;
    }

    /**
     * Get the value of referencia
     */

    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set the value of referencia
     *
     * @return  self
     */

    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get the value of observaciones
     */

    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set the value of observaciones
     *
     * @return  self
     */

    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }
}

?>
