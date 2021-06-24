/*/
@Yimis Torreglosa Diaz
/*/
<?php

	class AuxiliarPublicoActualizarRq {
			
    //VARIABLES
	private $Inscripcion;
    private $categoria;
    private $Garantia;
    private $Resolucion;

	
	//CONSTRUCTOR
    public function __construct()
    {
		//
    }

	// METODOS GETTERS y SETTERS


	/**
	 * Get the value of Inscripcion
	 */ 
	public function getInscripcion()
	{
		return $this->Inscripcion;
	}

	/**
	 * Set the value of Inscripcion
	 *
	 * @return  self
	 */ 
	public function setInscripcion($Inscripcion)
	{
		$this->Inscripcion = $Inscripcion;

		return $this;
	}

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of Garantia
     */ 
    public function getGarantia()
    {
        return $this->Garantia;
    }

    /**
     * Set the value of Garantia
     *
     * @return  self
     */ 
    public function setGarantia($Garantia)
    {
        $this->Garantia = $Garantia;

        return $this;
    }

    /**
     * Get the value of Resolucion
     */ 
    public function getResolucion()
    {
        return $this->Resolucion;
    }

    /**
     * Set the value of Resolucion
     *
     * @return  self
     */ 
    public function setResolucion($Resolucion)
    {
        $this->Resolucion = $Resolucion;

        return $this;
    }
	}

?>
