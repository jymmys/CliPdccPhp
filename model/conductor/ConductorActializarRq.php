/*/
@Yimis Torreglosa Diaz
/*/
<?php class Conductor
{
    private $Conductor;

    public function __construct()
    {
    }

    //Variable
    private $Conductor;

    // Constructor con Argumentos
    function __construct($Conductor)
    {
        $this->Conductor = $Conductor;
    }

    //Get
    public function getConductor()
    {
        return $this->Conductor;
    }

    //Set
    public function setConductor($Conductor)
    {
        $this->Conductor = $Conductor;
        return $this;
    }
}

?>
