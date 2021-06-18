/*/
@Yimis Torreglosa Diaz
/*/
<?php class Resultado
{
    //VARIABLES
    private $pais;
    private $repuestas;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of pais
     */

    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */

    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get the value of repuestas
     */

    public function getRepuestas()
    {
        return $this->repuestas;
    }

    /**
     * Set the value of repuestas
     *
     * @return  self
     */

    public function setRepuestas($repuestas)
    {
        $this->repuestas = $repuestas;

        return $this;
    }
} ?>

