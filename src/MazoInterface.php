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

}
