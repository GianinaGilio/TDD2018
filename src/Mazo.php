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


  public function esVacio(){
    	if($this->cantCartas != 0){ 
		return FALSE;
		}	
	return TRUE;
}


  public function mezclar() {
    return TRUE;
  }
}
