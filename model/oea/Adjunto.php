/*/
@Yimis Torreglosa Diaz
/*/
<?php class Adjunto
{
    //VARIABLES
    private $nombreArchivo;
    private $adjunto;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of nombreArchivo
     */

    public function getNombreArchivo()
    {
        return $this->nombreArchivo;
    }

    /**
     * Set the value of nombreArchivo
     *
     * @return  self
     */

    public function setNombreArchivo($nombreArchivo)
    {
        $this->nombreArchivo = $nombreArchivo;

        return $this;
    }

    /**
     * Get the value of adjunto
     */

    public function getAdjunto()
    {
        return $this->adjunto;
    }

    /**
     * Set the value of adjunto
     *
     * @return  self
     */

    public function setAdjunto($adjunto)
    {
        $this->adjunto = $adjunto;

        return $this;
    }
} ?>

