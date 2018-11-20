<?php

namespace TDD;

interface CartaInterface {

    /**
     *Devuelve el numero de la carta.
     *
     * @return string
     */
    public function verNumero();

    /**
     * Devuelve el palo de la carta.
     *
     * @return string
     */
    public function verPalo();
	
	/**
     * Devuelve el tipo de la carta.
     *
     * @return string
     */
    public function verTipo();

}