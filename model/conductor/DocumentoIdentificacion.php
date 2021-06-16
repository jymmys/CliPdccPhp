<?php
class DocumnetoIdentificacion
{


	private $TIPO;
	private $NUMERO;
	private $PAIS_DE_EMISION;
	private $FECHA_VENCIMIENTO;

	/*
	*/

	//Constructor
	function __construct($TIPO, $NUMERO, $PAIS_DE_EMISION, $FECHA_VENCIMIENTO)
	{
		$this->TIPO = $TIPO;
		$this->NUMERO = $NUMERO;
		$this->PAIS_DE_EMISION = $PAIS_DE_EMISION;
		$this->FECHA_VENCIMIENTO = $FECHA_VENCIMIENTO;
	}

	/*
	*/

	//get TIPO
	public function getTIPO()
	{
		return $this->TIPO;
	}

	/*
	*/

	//set TIPO
	public function setTIPO($TIPO)
	{
		$this->TIPO = $TIPO;
		return $this;
	}

	/*
	*/
	//get NUMERO
	public function getNUMERO(){
		return $this->NUMERO;
	}

	//set NUMERO
	public function setNUMERO($NUMERO){
		$this->NUMERO = $NUMERO;
		return $this;
	}

	/*
	*/
	//get PAIS_DE_EMISION
	public function getPAIS_DE_EMISION(){
		return $this->PAIS_DE_EMISION;
	}

	//set PAIS_DE_EMISION
	public function setPAIS_DE_EMISION(PAIS_DE_EMISION){
		
	}
}
