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
     * Devuelve una carta espec�fica del mazo.
     *
     * @return Carta
     */
    public function obtenerCarta();

}
