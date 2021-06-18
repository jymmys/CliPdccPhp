/*/
@Yimis Torreglosa Diaz
/*/
<?php class Registro
{
    //VARIABLES
    private $descripcion;
    private $numeroDut;
    private $tipoDut;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

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
     * Get the value of numeroDut
     */

    public function getNumeroDut()
    {
        return $this->numeroDut;
    }

    /**
     * Set the value of numeroDut
     *
     * @return  self
     */

    public function setNumeroDut($numeroDut)
    {
        $this->numeroDut = $numeroDut;

        return $this;
    }

    /**
     * Get the value of tipoDut
     */

    public function getTipoDut()
    {
        return $this->tipoDut;
    }

    /**
     * Set the value of tipoDut
     *
     * @return  self
     */

    public function setTipoDut($tipoDut)
    {
        $this->tipoDut = $tipoDut;

        return $this;
    }
} ?>

