/*/
@Yimis Torreglosa Diaz
/*/
<?php class Solicitud
{
    private string $STATUS;

    //Constructor
    public function __construct()
    {
        //
    }

    /**
     * Get the value of STATUS
     */

    public function getSTATUS()
    {
        return $this->STATUS;
    }

    /**
     * Set the value of STATUS
     *
     * @return  self
     */

    public function setSTATUS($STATUS)
    {
        $this->STATUS = $STATUS;

        return $this;
    }
} ?>



