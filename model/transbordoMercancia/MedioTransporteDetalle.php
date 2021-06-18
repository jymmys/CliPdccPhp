/*/
@Yimis Torreglosa Diaz
/*/
<?php class MedioTransporteDetalle
{
    //VARIABLES
    private $chasisTransporte;
    private $codigoConductor;
    private $nombreConductor;
    private $nombreNaveAeronave;
    private $numeroNaveAeronave;
    private $numeroTransporte;
    private $numeroViaje;
    private $paisBandera;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of chasisTransporte
     */

    public function getChasisTransporte()
    {
        return $this->chasisTransporte;
    }

    /**
     * Set the value of chasisTransporte
     *
     * @return  self
     */

    public function setChasisTransporte($chasisTransporte)
    {
        $this->chasisTransporte = $chasisTransporte;

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

    /**
     * Get the value of nombreConductor
     */

    public function getNombreConductor()
    {
        return $this->nombreConductor;
    }

    /**
     * Set the value of nombreConductor
     *
     * @return  self
     */

    public function setNombreConductor($nombreConductor)
    {
        $this->nombreConductor = $nombreConductor;

        return $this;
    }

    /**
     * Get the value of nombreNaveAeronave
     */

    public function getNombreNaveAeronave()
    {
        return $this->nombreNaveAeronave;
    }

    /**
     * Set the value of nombreNaveAeronave
     *
     * @return  self
     */

    public function setNombreNaveAeronave($nombreNaveAeronave)
    {
        $this->nombreNaveAeronave = $nombreNaveAeronave;

        return $this;
    }

    /**
     * Get the value of numeroNaveAeronave
     */

    public function getNumeroNaveAeronave()
    {
        return $this->numeroNaveAeronave;
    }

    /**
     * Set the value of numeroNaveAeronave
     *
     * @return  self
     */

    public function setNumeroNaveAeronave($numeroNaveAeronave)
    {
        $this->numeroNaveAeronave = $numeroNaveAeronave;

        return $this;
    }

    /**
     * Get the value of numeroTransporte
     */

    public function getNumeroTransporte()
    {
        return $this->numeroTransporte;
    }

    /**
     * Set the value of numeroTransporte
     *
     * @return  self
     */

    public function setNumeroTransporte($numeroTransporte)
    {
        $this->numeroTransporte = $numeroTransporte;

        return $this;
    }

    /**
     * Get the value of numeroViaje
     */

    public function getNumeroViaje()
    {
        return $this->numeroViaje;
    }

    /**
     * Set the value of numeroViaje
     *
     * @return  self
     */

    public function setNumeroViaje($numeroViaje)
    {
        $this->numeroViaje = $numeroViaje;

        return $this;
    }

    /**
     * Get the value of paisBandera
     */

    public function getPaisBandera()
    {
        return $this->paisBandera;
    }

    /**
     * Set the value of paisBandera
     *
     * @return  self
     */

    public function setPaisBandera($paisBandera)
    {
        $this->paisBandera = $paisBandera;

        return $this;
    }
} ?>

