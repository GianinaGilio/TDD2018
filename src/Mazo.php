<?php

namespace TDD;

class Mazo {

  protected $cantCartas;
  protected $num = array();
  protected $mazo;

  public function __construct($num){
	$this->mazo = $num;
  }

  public function obtenerCantidad(){
	$i=0;
	foreach ($this->num as &$valor) {
    	$this->cantCartas= $this->cantCartas+1;
	}
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
