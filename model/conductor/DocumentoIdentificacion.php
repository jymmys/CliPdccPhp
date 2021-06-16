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
	public function getTIPO(){
		return $this->TIPO;
	}

	/*
	*/

	//set TIPO
	public function setTIPO
}
