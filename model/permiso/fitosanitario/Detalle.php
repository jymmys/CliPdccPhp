/*/
@Yimis Torreglosa Diaz
/*/
<?php class Detalle
{
    //VARIABLES
    private $numeroLinea;
    private $cantidad;
    private $empaqueEmbalaje;
    private $descripcion;
    private $usoPrevisto;
    private $nombreCientifico;
    private $categoriaUAC;
    private $pesoBruto;
    private $pesoNeto;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of numeroLinea
     */

    public function getNumeroLinea()
    {
        return $this->numeroLinea;
    }

    /**
     * Set the value of numeroLinea
     *
     * @return  self
     */

    public function setNumeroLinea($numeroLinea)
    {
        $this->numeroLinea = $numeroLinea;

        return $this;
    }

    /**
     * Get the value of cantidad
     */

    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set the value of cantidad
     *
     * @return  self
     */

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get the value of empaqueEmbalaje
     */

    public function getEmpaqueEmbalaje()
    {
        return $this->empaqueEmbalaje;
    }

    /**
     * Set the value of empaqueEmbalaje
     *
     * @return  self
     */

    public function setEmpaqueEmbalaje($empaqueEmbalaje)
    {
        $this->empaqueEmbalaje = $empaqueEmbalaje;

        return $this;
    }

    /**
     * Get the value of descripcion
     */

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of usoPrevisto
     */

    public function getUsoPrevisto()
    {
        return $this->usoPrevisto;
    }

    /**
     * Set the value of usoPrevisto
     *
     * @return  self
     */

    public function setUsoPrevisto($usoPrevisto)
    {
        $this->usoPrevisto = $usoPrevisto;

        return $this;
    }

    /**
     * Get the value of nombreCientifico
     */

    public function getNombreCientifico()
    {
        return $this->nombreCientifico;
    }

    /**
     * Set the value of nombreCientifico
     *
     * @return  self
     */

    public function setNombreCientifico($nombreCientifico)
    {
        $this->nombreCientifico = $nombreCientifico;

        return $this;
    }

    /**
     * Get the value of categoriaUAC
     */

    public function getCategoriaUAC()
    {
        return $this->categoriaUAC;
    }

    /**
     * Set the value of categoriaUAC
     *
     * @return  self
     */

    public function setCategoriaUAC($categoriaUAC)
    {
        $this->categoriaUAC = $categoriaUAC;

        return $this;
    }

    /**
     * Get the value of pesoBruto
     */

    public function getPesoBruto()
    {
        return $this->pesoBruto;
    }

    /**
     * Set the value of pesoBruto
     *
     * @return  self
     */

    public function setPesoBruto($pesoBruto)
    {
        $this->pesoBruto = $pesoBruto;

        return $this;
    }

    /**
     * Get the value of pesoNeto
     */

    public function getPesoNeto()
    {
        return $this->pesoNeto;
    }

    /**
     * Set the value of pesoNeto
     *
     * @return  self
     */

    public function setPesoNeto($pesoNeto)
    {
        $this->pesoNeto = $pesoNeto;

        return $this;
    }
} ?>

