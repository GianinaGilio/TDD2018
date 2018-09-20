<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {

    /**
     * Valida que se puedan crear cartas.
     */
    public function testExiste() {
        $carta = new Carta(9,"ORO");
        $this->assertTrue(isset($carta));
    }

	public function testVerNumero(){
		$carta = new Carta(5,"COPA");
		$this->assertEquals($carta->verNumero(),5);
	}
	
    public function testVerPalo(){
		$carta = new Carta(9,"ORO");
		$this->assertEquals($carta->verPalo(),"ORO");
	}
	
}
