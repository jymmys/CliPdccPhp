/*/
@Yimis Torreglosa Diaz
/*/
<?php class TransportistaConsultarRq
{
    //VARIABLES
    private $codigoTransportista;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of codigoTransportista
     */

    public function getCodigoTransportista()
    {
        return $this->codigoTransportista;
    }

    /**
     * Set the value of codigoTransportista
     *
     * @return  self
     */

    public function setCodigoTransportista($codigoTransportista)
    {
        $this->codigoTransportista = $codigoTransportista;

        return $this;
    }
} ?>


