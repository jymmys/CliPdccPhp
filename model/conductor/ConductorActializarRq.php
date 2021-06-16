<?php

require_once("Conductor.php");

class Conductor extends Conductor
{

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
