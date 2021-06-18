/*/
@Yimis Torreglosa Diaz
/*/
<?php class Articulo
{
    //VARIABLES
    private $numero;
    private $codigoArancelario;
    private $especificaciones;
    private $tipoUso;
    private $pais;
    private $condicionArticulo;
    private $numeroDocumento;
    private $numeroLicencia;
    private $cantidadUnidades;
    private $unidadMedida;
    private $numeroBultos;
    private $pesoBruto;
    private $pesoNeto;
    private $cantidadCargaLiquida;
    private $valorUnitario;
    private $valorFob;
    private $montoFlete;
    private $valorSeguro;
    private $valorCifn;

    //CONSTRUCTOR
    public function __construct()
    {
        //
    }

    // METODOS GETTERS y SETTERS

    /**
     * Get the value of numero
     */

    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of codigoArancelario
     */

    public function getCodigoArancelario()
    {
        return $this->codigoArancelario;
    }

    /**
     * Set the value of codigoArancelario
     *
     * @return  self
     */

    public function setCodigoArancelario($codigoArancelario)
    {
        $this->codigoArancelario = $codigoArancelario;

        return $this;
    }

    /**
     * Get the value of especificaciones
     */

    public function getEspecificaciones()
    {
        return $this->especificaciones;
    }

    /**
     * Set the value of especificaciones
     *
     * @return  self
     */

    public function setEspecificaciones($especificaciones)
    {
        $this->especificaciones = $especificaciones;

        return $this;
    }

    /**
     * Get the value of tipoUso
     */

    public function getTipoUso()
    {
        return $this->tipoUso;
    }

    /**
     * Set the value of tipoUso
     *
     * @return  self
     */

    public function setTipoUso($tipoUso)
    {
        $this->tipoUso = $tipoUso;

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
     * Get the value of condicionArticulo
     */

    public function getCondicionArticulo()
    {
        return $this->condicionArticulo;
    }

    /**
     * Set the value of condicionArticulo
     *
     * @return  self
     */

    public function setCondicionArticulo($condicionArticulo)
    {
        $this->condicionArticulo = $condicionArticulo;

        return $this;
    }

    /**
     * Get the value of numeroDocumento
     */

    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * Set the value of numeroDocumento
     *
     * @return  self
     */

    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;

        return $this;
    }

    /**
     * Get the value of numeroLicencia
     */

    public function getNumeroLicencia()
    {
        return $this->numeroLicencia;
    }

    /**
     * Set the value of numeroLicencia
     *
     * @return  self
     */

    public function setNumeroLicencia($numeroLicencia)
    {
        $this->numeroLicencia = $numeroLicencia;

        return $this;
    }

    /**
     * Get the value of cantidadUnidades
     */

    public function getCantidadUnidades()
    {
        return $this->cantidadUnidades;
    }

    /**
     * Set the value of cantidadUnidades
     *
     * @return  self
     */

    public function setCantidadUnidades($cantidadUnidades)
    {
        $this->cantidadUnidades = $cantidadUnidades;

        return $this;
    }

    /**
     * Get the value of unidadMedida
     */

    public function getUnidadMedida()
    {
        return $this->unidadMedida;
    }

    /**
     * Set the value of unidadMedida
     *
     * @return  self
     */

    public function setUnidadMedida($unidadMedida)
    {
        $this->unidadMedida = $unidadMedida;

        return $this;
    }

    /**
     * Get the value of numeroBultos
     */

    public function getNumeroBultos()
    {
        return $this->numeroBultos;
    }

    /**
     * Set the value of numeroBultos
     *
     * @return  self
     */

    public function setNumeroBultos($numeroBultos)
    {
        $this->numeroBultos = $numeroBultos;

        return $this;
    }

    /**
     * Get the value of pesoBruto
     */

    public function getPesoBruto()
    {
        return $this->pesoBruto;
    }

    /**
     * Set the value of pesoBruto
     *
     * @return  self
     */

    public function setPesoBruto($pesoBruto)
    {
        $this->pesoBruto = $pesoBruto;

        return $this;
    }

    /**
     * Get the value of pesoNeto
     */

    public function getPesoNeto()
    {
        return $this->pesoNeto;
    }

    /**
     * Set the value of pesoNeto
     *
     * @return  self
     */

    public function setPesoNeto($pesoNeto)
    {
        $this->pesoNeto = $pesoNeto;

        return $this;
    }

    /**
     * Get the value of cantidadCargaLiquida
     */

    public function getCantidadCargaLiquida()
    {
        return $this->cantidadCargaLiquida;
    }

    /**
     * Set the value of cantidadCargaLiquida
     *
     * @return  self
     */

    public function setCantidadCargaLiquida($cantidadCargaLiquida)
    {
        $this->cantidadCargaLiquida = $cantidadCargaLiquida;

        return $this;
    }

    /**
     * Get the value of valorUnitario
     */

    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * Set the value of valorUnitario
     *
     * @return  self
     */

    public function setValorUnitario($valorUnitario)
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }

    /**
     * Get the value of valorFob
     */

    public function getValorFob()
    {
        return $this->valorFob;
    }

    /**
     * Set the value of valorFob
     *
     * @return  self
     */

    public function setValorFob($valorFob)
    {
        $this->valorFob = $valorFob;

        return $this;
    }

    /**
     * Get the value of montoFlete
     */

    public function getMontoFlete()
    {
        return $this->montoFlete;
    }

    /**
     * Set the value of montoFlete
     *
     * @return  self
     */

    public function setMontoFlete($montoFlete)
    {
        $this->montoFlete = $montoFlete;

        return $this;
    }

    /**
     * Get the value of valorSeguro
     */

    public function getValorSeguro()
    {
        return $this->valorSeguro;
    }

    /**
     * Set the value of valorSeguro
     *
     * @return  self
     */

    public function setValorSeguro($valorSeguro)
    {
        $this->valorSeguro = $valorSeguro;

        return $this;
    }

    /**
     * Get the value of valorCifn
     */

    public function getValorCifn()
    {
        return $this->valorCifn;
    }

    /**
     * Set the value of valorCifn
     *
     * @return  self
     */

    public function setValorCifn($valorCifn)
    {
        $this->valorCifn = $valorCifn;

        return $this;
    }
}

?>
