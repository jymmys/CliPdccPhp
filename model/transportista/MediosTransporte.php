/*/
@Yimis Torreglosa Diaz
/*/
<?php class MediosTransporte
{
    //VARIABLES
    private $nroPlaca;
    private $nroEjes;
    private $nroMotor;
    private $nroChasis;
    private $marca;
    private $modelo;
    private $anio;
    private $tipo;
    private $estado;
    private $observaciones;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of nroPlaca
     */

    public function getNroPlaca()
    {
        return $this->nroPlaca;
    }

    /**
     * Set the value of nroPlaca
     *
     * @return  self
     */

    public function setNroPlaca($nroPlaca)
    {
        $this->nroPlaca = $nroPlaca;

        return $this;
    }

    /**
     * Get the value of nroEjes
     */

    public function getNroEjes()
    {
        return $this->nroEjes;
    }

    /**
     * Set the value of nroEjes
     *
     * @return  self
     */

    public function setNroEjes($nroEjes)
    {
        $this->nroEjes = $nroEjes;

        return $this;
    }

    /**
     * Get the value of nroMotor
     */

    public function getNroMotor()
    {
        return $this->nroMotor;
    }

    /**
     * Set the value of nroMotor
     *
     * @return  self
     */

    public function setNroMotor($nroMotor)
    {
        $this->nroMotor = $nroMotor;

        return $this;
    }

    /**
     * Get the value of nroChasis
     */

    public function getNroChasis()
    {
        return $this->nroChasis;
    }

    /**
     * Set the value of nroChasis
     *
     * @return  self
     */

    public function setNroChasis($nroChasis)
    {
        $this->nroChasis = $nroChasis;

        return $this;
    }

    /**
     * Get the value of marca
     */

    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */

    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of modelo
     */

    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of anio
     */

    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set the value of anio
     *
     * @return  self
     */

    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get the value of tipo
     */

    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

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
} ?>


