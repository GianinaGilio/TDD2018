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

  /*
  mazo->int
  Devuelve la cantidad de cartas del mazo.
  */
  public function obtenerCantidad(){
	return $this->cantCartas;
  }

  /*
  mazo->carta
  Devuelve una carta específica del mazo.
  */
  public function obtenerCarta(){
    $auxiliar = $this->mazo[0];
    return $auxiliar;
  }

  /*
  mazo->bool
  Devuelve TRUE si el mazo no contiene cartas, y False de lo contrario.
  */
  public function esVacio(){
    	if($this->cantCartas != NULL){ 
		return FALSE;
		}	
	return TRUE;
  }

  /*
  mazo->carta->mazo
  Agrega una carta al mazo, si esta coincide en el tipo de mazo.
  */
  public function agregarCarta(Carta $carta){
    if($carta->verTipo() == $this->tipo)
    {
      $this->mazo[$this->obtenerCantidad()+1]=$carta;
      $this->cantCartas+1;
      return TRUE;
    }
    
    return FALSE;
  }

  /*
  mazo->mazo
  Devuelve el mismo mazo, pero con las cartas en otro orden.
  */
  public function mezclar() {
    shuffle($this->mazo);
    return TRUE;
  }

}