<?php

namespace TDD;

class Mazo {

  protected cantCartas;

  public function __construct($cantCartas){
	$this->cantCartas = $cantCartas;
}
  public function obtenerCantidad(){
	return $this->cantCartas;
}
  public function mezclar() {
    return TRUE;
  }
}
