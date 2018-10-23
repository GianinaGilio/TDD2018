<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {

    /**
     * Valida que se puedan crear cartas.
     */
    public function testExiste() {
        $carta = new Carta("9","ORO", "ESPAÑOLA");
        $this->assertTrue(isset($carta));
    }

	public function testVerNumero(){
		$carta = new Carta("5","COPA", "ESPAÑOLA");
		$this->assertEquals($carta->verNumero(),5);
	}
	
    public function testVerPalo(){
		$carta = new Carta("9","ORO", "ESPAÑOLA");
		$this->assertEquals($carta->verPalo(),"ORO");
	}

   public function testTipoCarta(){
		$carta = new Carta("9", "ORO", "ESPAÑOLA");
		$carta2 = new Carta("AS", "CORAZONES", "POKER");
		$this->assertEquals($carta->verTipo(),"ESPAÑOLA");
		$this->assertEquals($carta2->verTipo(),"POKER");
	}
	
}
