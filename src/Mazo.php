<?php

namespace TDD;

class Mazo {

  protected $cantCartas;
  protected $mazo= array();

  public function __construct($num){
  $this->mazo = $num;
  foreach ($this->mazo as &$valor) {
    $this->cantCartas= $this->cantCartas+1;
}
  }

  public function obtenerCantidad(){
	
	return $this->cantCartas;
  }

  public function obtenerCarta(){
    $auxiliar = $this->mazo[0];
    return $auxiliar;
  }


  public function esVacio(){
    	if($this->cantCartas != NULL){ 
		return FALSE;
		}	
	return TRUE;
  }


  public function mezclar() {
    return TRUE;
  }
}
