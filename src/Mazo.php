<?php

namespace TDD;

class Mazo {

  protected $cantCartas;
  protected $mazo= array();
  protected $tipo;
  private $aux= array();

  public function __construct($num, $tipo){
  $this->mazo = $num;
  foreach ($this->mazo as &$valor) {
    $this->cantCartas= $this->cantCartas+1;
  }
  $this->tipo=$tipo;
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

  public function agregarCarta(Carta $carta){
    if($carta->verTipo() == $this->tipo)
    {
      $this->mazo[$this->obtenerCantidad()+1]=$carta;
      $this->cantCartas+1;
      return TRUE;
    }
    
    return FALSE;
  }

  public function mezclar() {
    shuffle($this->mazo);
    return TRUE;
  }

  public function cortar(){
    $contador=0;
    for ($i=0; $i == $this->obtenerCantidad()/2; $i++) {
     $this->aux[$i] = $this->mazo[$this->obtenerCantidad()+$i];
     $contador++;
    }
    
    for ($i=$contador; $i > $this->obtenerCantidad(); $i++) {
      $this->aux[$i] = $this->mazo[$i];
     }
    
     $this->mazo = $this->aux;
     return TRUE;
}
}