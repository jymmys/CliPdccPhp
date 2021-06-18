/*/
@Yimis Torreglosa Diaz
/*/
<?php class Transportistas
{
    //VARIABLES
    private $transportista;
    private $pais;
    private $idTransportista;
    private $nombre;
    private $tipoDocumento;
    private $numeroIdentificacion;
    private $nit;
    private $direccion;
    private $correoElectronico;
    private $telefono;
    private $fax;
    private $estado;
    private $nombreRepresentante;
    private $tipoDocumentoRepresentante;
    private $numeroidentificacionRepresentante;
    private $observaciones;
    private $nombreArchivo;
    private $adjuntoBase64;

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
     * Get the value of idTransportista
     */

    public function getIdTransportista()
    {
        return $this->idTransportista;
    }

    /**
     * Set the value of idTransportista
     *
     * @return  self
     */

    public function setIdTransportista($idTransportista)
    {
        $this->idTransportista = $idTransportista;

        return $this;
    }

    /**
     * Get the value of nombre
     */

    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of tipoDocumento
     */

    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set the value of tipoDocumento
     *
     * @return  self
     */

    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get the value of numeroIdentificacion
     */

    public function getNumeroIdentificacion()
    {
        return $this->numeroIdentificacion;
    }

    /**
     * Set the value of numeroIdentificacion
     *
     * @return  self
     */

    public function setNumeroIdentificacion($numeroIdentificacion)
    {
        $this->numeroIdentificacion = $numeroIdentificacion;

        return $this;
    }

    /**
     * Get the value of nit
     */

    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set the value of nit
     *
     * @return  self
     */

    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get the value of direccion
     */

    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of correoElectronico
     */

    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }

    /**
     * Set the value of correoElectronico
     *
     * @return  self
     */

    public function setCorreoElectronico($correoElectronico)
    {
        $this->correoElectronico = $correoElectronico;

        return $this;
    }

    /**
     * Get the value of telefono
     */

    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of fax
     */

    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set the value of fax
     *
     * @return  self
     */

    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get the value of estado
     */

    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */

    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of nombreRepresentante
     */

    public function getNombreRepresentante()
    {
        return $this->nombreRepresentante;
    }

    /**
     * Set the value of nombreRepresentante
     *
     * @return  self
     */

    public function setNombreRepresentante($nombreRepresentante)
    {
        $this->nombreRepresentante = $nombreRepresentante;

        return $this;
    }

    /**
     * Get the value of tipoDocumentoRepresentante
     */

    public function getTipoDocumentoRepresentante()
    {
        return $this->tipoDocumentoRepresentante;
    }

    /**
     * Set the value of tipoDocumentoRepresentante
     *
     * @return  self
     */

    public function setTipoDocumentoRepresentante($tipoDocumentoRepresentante)
    {
        $this->tipoDocumentoRepresentante = $tipoDocumentoRepresentante;

        return $this;
    }

    /**
     * Get the value of numeroidentificacionRepresentante
     */

    public function getNumeroidentificacionRepresentante()
    {
        return $this->numeroidentificacionRepresentante;
    }

    /**
     * Set the value of numeroidentificacionRepresentante
     *
     * @return  self
     */

    public function setNumeroidentificacionRepresentante(
        $numeroidentificacionRepresentante
    ) {
        $this->numeroidentificacionRepresentante = $numeroidentificacionRepresentante;

        return $this;
    }

    /**
     * Get the value of observaciones
     */

    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set the value of observaciones
     *
     * @return  self
     */

    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

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
     * Get the value of adjuntoBase64
     */

    public function getAdjuntoBase64()
    {
        return $this->adjuntoBase64;
    }

    /**
     * Set the value of adjuntoBase64
     *
     * @return  self
     */

    public function setAdjuntoBase64($adjuntoBase64)
    {
        $this->adjuntoBase64 = $adjuntoBase64;

        return $this;
    }
} ?>


