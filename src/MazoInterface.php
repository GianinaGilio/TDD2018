<?php

namespace TDD;

interface MazoInterface {

    /**
     *Devuelve la cantidad de cartas del mazo.
     *
     * @return int
     */
    public function obtenerCantidad();

    /**
     * Devuelve una carta específica del mazo.
     *
     * @return Carta
     */
    public function obtenerCarta();
	
	/**
     * Devuelve TRUE si el mazo no contiene cartas, y False de lo contrario.
     *
     * @return Bool
     */
    public function esVacio();

	/**
     * Agrega una carta al mazo, si esta coincide en el tipo de mazo.
     *
     * @return Mazo
     */
    public function agregarCarta($carta);	
	
	/**
     * Devuelve el mismo mazo, pero con las cartas en otro orden.
     *
     * @return Mazo
     */
    public function mezclar();

}
