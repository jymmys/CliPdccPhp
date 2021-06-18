/*/
@Yimis Torreglosa Diaz
/*/
<?php class Manifiesto
{
    //VARIABLES
    private $fechaManifiesto;
    private $fechaPrevistaLlegada;
    private $fechaPrevistaSalida;
    private $lugarDestino;
    private $lugarSalida;
    private $medioTransporte;
    private $numeroManifiesto;
    private $tipoManifiesto;
    private $cantidadConocimientoEmbarque;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of fechaManifiesto
     */

    public function getFechaManifiesto()
    {
        return $this->fechaManifiesto;
    }

    /**
     * Set the value of fechaManifiesto
     *
     * @return  self
     */

    public function setFechaManifiesto($fechaManifiesto)
    {
        $this->fechaManifiesto = $fechaManifiesto;

        return $this;
    }

    /**
     * Get the value of fechaPrevistaLlegada
     */

    public function getFechaPrevistaLlegada()
    {
        return $this->fechaPrevistaLlegada;
    }

    /**
     * Set the value of fechaPrevistaLlegada
     *
     * @return  self
     */

    public function setFechaPrevistaLlegada($fechaPrevistaLlegada)
    {
        $this->fechaPrevistaLlegada = $fechaPrevistaLlegada;

        return $this;
    }

    /**
     * Get the value of fechaPrevistaSalida
     */

    public function getFechaPrevistaSalida()
    {
        return $this->fechaPrevistaSalida;
    }

    /**
     * Set the value of fechaPrevistaSalida
     *
     * @return  self
     */

    public function setFechaPrevistaSalida($fechaPrevistaSalida)
    {
        $this->fechaPrevistaSalida = $fechaPrevistaSalida;

        return $this;
    }

    /**
     * Get the value of lugarDestino
     */

    public function getLugarDestino()
    {
        return $this->lugarDestino;
    }

    /**
     * Set the value of lugarDestino
     *
     * @return  self
     */

    public function setLugarDestino($lugarDestino)
    {
        $this->lugarDestino = $lugarDestino;

        return $this;
    }

    /**
     * Get the value of lugarSalida
     */

    public function getLugarSalida()
    {
        return $this->lugarSalida;
    }

    /**
     * Set the value of lugarSalida
     *
     * @return  self
     */

    public function setLugarSalida($lugarSalida)
    {
        $this->lugarSalida = $lugarSalida;

        return $this;
    }

    /**
     * Get the value of medioTransporte
     */

    public function getMedioTransporte()
    {
        return $this->medioTransporte;
    }

    /**
     * Set the value of medioTransporte
     *
     * @return  self
     */

    public function setMedioTransporte($medioTransporte)
    {
        $this->medioTransporte = $medioTransporte;

        return $this;
    }

    /**
     * Get the value of numeroManifiesto
     */

    public function getNumeroManifiesto()
    {
        return $this->numeroManifiesto;
    }

    /**
     * Set the value of numeroManifiesto
     *
     * @return  self
     */

    public function setNumeroManifiesto($numeroManifiesto)
    {
        $this->numeroManifiesto = $numeroManifiesto;

        return $this;
    }

    /**
     * Get the value of tipoManifiesto
     */

    public function getTipoManifiesto()
    {
        return $this->tipoManifiesto;
    }

    /**
     * Set the value of tipoManifiesto
     *
     * @return  self
     */

    public function setTipoManifiesto($tipoManifiesto)
    {
        $this->tipoManifiesto = $tipoManifiesto;

        return $this;
    }

    /**
     * Get the value of cantidadConocimientoEmbarque
     */

    public function getCantidadConocimientoEmbarque()
    {
        return $this->cantidadConocimientoEmbarque;
    }

    /**
     * Set the value of cantidadConocimientoEmbarque
     *
     * @return  self
     */

    public function setCantidadConocimientoEmbarque(
        $cantidadConocimientoEmbarque
    ) {
        $this->cantidadConocimientoEmbarque = $cantidadConocimientoEmbarque;

        return $this;
    }
} ?>

