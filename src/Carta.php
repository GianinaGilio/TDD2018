<?php

namespace TDD;

class Carta {

	protected $numero;
	protected $palo;

	public function __construct($numero,$palo){
	$this->numero = $numero;
	$this->palo = $palo;
	}
	
	public function verNumero(){
	return $this->numero;
	}
	
	public function verPalo(){
	return $this->palo;
	}

 }
