<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
	$carta1 = new Carta(9,"oro");
	$carta2 = new Carta(8,"copa");
	$carta3 = new Carta(5,"espada");
        $array= array($carta1,$carta2,$carta3);
	$mazo = new Mazo($array);
        $this->assertTrue(isset($mazo));
    }

    public function testTieneCartas(){
	$carta1 = new Carta(9,"oro");
	$carta2 = new Carta(8,"copa");
	$carta3 = new Carta(5,"espada");
	$array= array();
	$mazo = new Mazo($array);
	$this->assertTrue($mazo->esVacio());
	$array= array($carta1,$carta2,$carta3);
	$mazo = new Mazo($array);
	$this->assertFalse($mazo2->esVacio());
}

    public function testMezclable() {
	$carta1 = new Carta(9,"oro");
	$carta2 = new Carta(8,"copa");
	$carta3 = new Carta(5,"espada");
        $array= array($carta1,$carta2,$carta3);
	$mazo = new Mazo($array);
        $this->assertTrue($mazo->mezclar());
    }

    public function testObtenerCantidad(){
	$carta1 = new Carta(9,"oro");
	$carta2 = new Carta(8,"copa");
	$carta3 = new Carta(5,"espada");
	$array= array($carta1,$carta2,$carta3);
	$mazo = new Mazo($array);
	$this->assertEquals($mazo->obtenerCantidad(),3);
	}
}
