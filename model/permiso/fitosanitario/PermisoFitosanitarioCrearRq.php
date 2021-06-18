/*/
@Yimis Torreglosa Diaz
/*/
<?php class PermisoFitosanitarioCrearRq
{
    //VARIABLES
    private $Encabezado;
    private $Datos;
    private $tipoOperacion;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of Encabezado
     */

    public function getEncabezado()
    {
        return $this->Encabezado;
    }

    /**
     * Set the value of Encabezado
     *
     * @return  self
     */

    public function setEncabezado($Encabezado)
    {
        $this->Encabezado = $Encabezado;

        return $this;
    }

    /**
     * Get the value of Datos
     */

    public function getDatos()
    {
        return $this->Datos;
    }

    /**
     * Set the value of Datos
     *
     * @return  self
     */

    public function setDatos($Datos)
    {
        $this->Datos = $Datos;

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

