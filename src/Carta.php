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
	
	/*
	carta->int
	Devuelve el numero de la carta.
	*/
	public function verNumero(){
	return $this->numero;
	}
	
	/*
	carta->string
	Devuelve el palo de la carta.
	*/
	public function verPalo(){
	return $this->palo;
	}

	/*
	carta->string
	Devuelve el tipo de la carta
	*/
	public function verTipo(){
	return $this->tipo;
	}

 }
