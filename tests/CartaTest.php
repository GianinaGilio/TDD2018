<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {

    /**
     * Valida que se puedan crear cartas.
     */
    public function testExiste() {
        $carta = new Carta;
        $this->assertTrue(isset($carta));
    }

    public function testPalo(){
		$carta = new Carta(9,"ORO");
		$this->assertEquals($carta->verPalo(),"ORO");
	}
}
