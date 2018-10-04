<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo(2);
        $this->assertTrue(isset($mazo));
    }

    public function testTieneCartas(){
	$mazo = new Mazo(0);
	$this->assertTrue($mazo->esVacio());
	$mazo2 = new Mazo(2);
	$this->assertFalse($mazo2->esVacio());
}

    public function testMezclable() {
        $mazo = new Mazo(2);
        $this->assertTrue($mazo->mezclar());
    }
    
    public function testObtenerCantidad(){
	$carta1 = new Carta(9,"oro");
	$carta2 = new Carta(8,"copa");
	$carta3 = new Carta(5,"espada");
	$mazo = new Mazo([$carta1,$carta2,$carta3]);
	$this->assertEquals($mazo->obtenerCantidad(),3);
	}

}
