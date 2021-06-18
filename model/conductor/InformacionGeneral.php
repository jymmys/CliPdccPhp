/*/
@Yimis Torreglosa Diaz
/*/
<?php class InformacionGeneral
{
    private $PRIMER_NOMBRE;
    private $SEGUNDO_NOMBRE;
    private $PRIMER_APELLIDO;
    private $SEGUNDO_APELLIDO;
    private $SEXO;
    private $DIRECCION_DOMICILIAR;
    private $NACIONALIDAD;
    private $PAIS_RESIDENCIA;
    private $NIT;
    private $PAIS_NACIMIENTO;
    private $FECHA_NACIMIENTO;
    private $ESTATUS;
    private $FOTO;

    public function __construct()
    {
    }

    /**
     * Get the value of PRIMER_NOMBRE
     */

    public function getPRIMER_NOMBRE()
    {
        return $this->PRIMER_NOMBRE;
    }

    /**
     * Set the value of PRIMER_NOMBRE
     *
     * @return  self
     */

    public function setPRIMER_NOMBRE($PRIMER_NOMBRE)
    {
        $this->PRIMER_NOMBRE = $PRIMER_NOMBRE;

        return $this;
    }

    /**
     * Get the value of SEGUNDO_NOMBRE
     */

    public function getSEGUNDO_NOMBRE()
    {
        return $this->SEGUNDO_NOMBRE;
    }

    /**
     * Set the value of SEGUNDO_NOMBRE
     *
     * @return  self
     */

    public function setSEGUNDO_NOMBRE($SEGUNDO_NOMBRE)
    {
        $this->SEGUNDO_NOMBRE = $SEGUNDO_NOMBRE;

        return $this;
    }

    /**
     * Get the value of PRIMER_APELLIDO
     */

    public function getPRIMER_APELLIDO()
    {
        return $this->PRIMER_APELLIDO;
    }

    /**
     * Set the value of PRIMER_APELLIDO
     *
     * @return  self
     */

    public function setPRIMER_APELLIDO($PRIMER_APELLIDO)
    {
        $this->PRIMER_APELLIDO = $PRIMER_APELLIDO;

        return $this;
    }

    /**
     * Get the value of SEGUNDO_APELLIDO
     */

    public function getSEGUNDO_APELLIDO()
    {
        return $this->SEGUNDO_APELLIDO;
    }

    /**
     * Set the value of SEGUNDO_APELLIDO
     *
     * @return  self
     */

    public function setSEGUNDO_APELLIDO($SEGUNDO_APELLIDO)
    {
        $this->SEGUNDO_APELLIDO = $SEGUNDO_APELLIDO;

        return $this;
    }

    /**
     * Get the value of SEXO
     */

    public function getSEXO()
    {
        return $this->SEXO;
    }

    /**
     * Set the value of SEXO
     *
     * @return  self
     */

    public function setSEXO($SEXO)
    {
        $this->SEXO = $SEXO;

        return $this;
    }

    /**
     * Get the value of DIRECCION_DOMICILIAR
     */

    public function getDIRECCION_DOMICILIAR()
    {
        return $this->DIRECCION_DOMICILIAR;
    }

    /**
     * Set the value of DIRECCION_DOMICILIAR
     *
     * @return  self
     */

    public function setDIRECCION_DOMICILIAR($DIRECCION_DOMICILIAR)
    {
        $this->DIRECCION_DOMICILIAR = $DIRECCION_DOMICILIAR;

        return $this;
    }

    /**
     * Get the value of NACIONALIDAD
     */

    public function getNACIONALIDAD()
    {
        return $this->NACIONALIDAD;
    }

    /**
     * Set the value of NACIONALIDAD
     *
     * @return  self
     */

    public function setNACIONALIDAD($NACIONALIDAD)
    {
        $this->NACIONALIDAD = $NACIONALIDAD;

        return $this;
    }

    /**
     * Get the value of PAIS_RESIDENCIA
     */

    public function getPAIS_RESIDENCIA()
    {
        return $this->PAIS_RESIDENCIA;
    }

    /**
     * Set the value of PAIS_RESIDENCIA
     *
     * @return  self
     */

    public function setPAIS_RESIDENCIA($PAIS_RESIDENCIA)
    {
        $this->PAIS_RESIDENCIA = $PAIS_RESIDENCIA;

        return $this;
    }

    /**
     * Get the value of NIT
     */

    public function getNIT()
    {
        return $this->NIT;
    }

    /**
     * Set the value of NIT
     *
     * @return  self
     */

    public function setNIT($NIT)
    {
        $this->NIT = $NIT;

        return $this;
    }

    /**
     * Get the value of PAIS_NACIMIENTO
     */

    public function getPAIS_NACIMIENTO()
    {
        return $this->PAIS_NACIMIENTO;
    }

    /**
     * Set the value of PAIS_NACIMIENTO
     *
     * @return  self
     */

    public function setPAIS_NACIMIENTO($PAIS_NACIMIENTO)
    {
        $this->PAIS_NACIMIENTO = $PAIS_NACIMIENTO;

        return $this;
    }

    /**
     * Get the value of FECHA_NACIMIENTO
     */

    public function getFECHA_NACIMIENTO()
    {
        return $this->FECHA_NACIMIENTO;
    }

    /**
     * Set the value of FECHA_NACIMIENTO
     *
     * @return  self
     */

    public function setFECHA_NACIMIENTO($FECHA_NACIMIENTO)
    {
        $this->FECHA_NACIMIENTO = $FECHA_NACIMIENTO;

        return $this;
    }

    /**
     * Get the value of ESTATUS
     */

    public function getESTATUS()
    {
        return $this->ESTATUS;
    }

    /**
     * Set the value of ESTATUS
     *
     * @return  self
     */

    public function setESTATUS($ESTATUS)
    {
        $this->ESTATUS = $ESTATUS;

        return $this;
    }

    /**
     * Get the value of FOTO
     */

    public function getFOTO()
    {
        return $this->FOTO;
    }

    /**
     * Set the value of FOTO
     *
     * @return  self
     */

    public function setFOTO($FOTO)
    {
        $this->FOTO = $FOTO;

        return $this;
    }
} ?>


