<?php

namespace TDD;

class Mazo {

  protected $cantCartas;

  public function __construct($num){
	$this->cantCartas = $num;
}
  public function obtenerCantidad(){
	return $this->cantCartas;
}
  public function mezclar() {
    return TRUE;
  }
}
