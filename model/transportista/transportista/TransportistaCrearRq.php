/*/
@Yimis Torreglosa Diaz
/*/
<?php class TransportistaCrearRq
{
    //VARIABLES
    private $transportista;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of transportista
     */

    public function getTransportista()
    {
        return $this->transportista;
    }

    /**
     * Set the value of transportista
     *
     * @return  self
     */

    public function setTransportista($transportista)
    {
        $this->transportista = $transportista;

        return $this;
    }
} ?>

