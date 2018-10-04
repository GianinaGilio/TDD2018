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
    	$i= $i +1;
	}
	$this->cantCartas=$i;
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
