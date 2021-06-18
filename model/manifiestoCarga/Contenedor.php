/*/
@Yimis Torreglosa Diaz
/*/
<?php class Contenedor
{
    //VARIABLES
    private $idContenedor;
    private $codigoIso;
    private $tipoContenedor;
    private $tamanoContenedor;
    private $estadoContenedor;
    private $peso;
    private $numeroMarchamo;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of idContenedor
     */

    public function getIdContenedor()
    {
        return $this->idContenedor;
    }

    /**
     * Set the value of idContenedor
     *
     * @return  self
     */

    public function setIdContenedor($idContenedor)
    {
        $this->idContenedor = $idContenedor;

        return $this;
    }

    /**
     * Get the value of codigoIso
     */

    public function getCodigoIso()
    {
        return $this->codigoIso;
    }

    /**
     * Set the value of codigoIso
     *
     * @return  self
     */

    public function setCodigoIso($codigoIso)
    {
        $this->codigoIso = $codigoIso;

        return $this;
    }

    /**
     * Get the value of tipoContenedor
     */

    public function getTipoContenedor()
    {
        return $this->tipoContenedor;
    }

    /**
     * Set the value of tipoContenedor
     *
     * @return  self
     */

    public function setTipoContenedor($tipoContenedor)
    {
        $this->tipoContenedor = $tipoContenedor;

        return $this;
    }

    /**
     * Get the value of tamanoContenedor
     */

    public function getTamanoContenedor()
    {
        return $this->tamanoContenedor;
    }

    /**
     * Set the value of tamanoContenedor
     *
     * @return  self
     */

    public function setTamanoContenedor($tamanoContenedor)
    {
        $this->tamanoContenedor = $tamanoContenedor;

        return $this;
    }

    /**
     * Get the value of estadoContenedor
     */

    public function getEstadoContenedor()
    {
        return $this->estadoContenedor;
    }

    /**
     * Set the value of estadoContenedor
     *
     * @return  self
     */

    public function setEstadoContenedor($estadoContenedor)
    {
        $this->estadoContenedor = $estadoContenedor;

        return $this;
    }

    /**
     * Get the value of peso
     */

    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */

    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of numeroMarchamo
     */

    public function getNumeroMarchamo()
    {
        return $this->numeroMarchamo;
    }

    /**
     * Set the value of numeroMarchamo
     *
     * @return  self
     */

    public function setNumeroMarchamo($numeroMarchamo)
    {
        $this->numeroMarchamo = $numeroMarchamo;

        return $this;
    }
} ?>

