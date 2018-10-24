<?php

namespace TDD;

class Carta {

	protected $numero;
	protected $palo;
	protected $tipo;

	public function __construct($numero,$palo, $tipo){
	$this->numero = $numero;
	$this->palo = $palo;
	$this->tipo = $tipo;
	}
	
	public function verNumero(){
	return $this->numero;
	}
	
	public function verPalo(){
	return $this->palo;
	}

	public function verTipo(){
	return $this->tipo;
	}

 }
