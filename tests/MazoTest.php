<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
	$carta1 = new Carta("9","ORO", "ESPAÑOLA");
	$carta2 = new Carta("8","COPA", "ESPAÑOLA");
	$carta3 = new Carta("5","COPA", "ESPAÑOLA");
        $array= array($carta1,$carta2,$carta3);
		$mazo = new Mazo($array);
        $this->assertTrue(isset($mazo));
    }

    public function testTieneCartas(){
	$carta1 = new Carta("9","ORO", "ESPAÑOLA");
	$carta2 = new Carta("8","COPA", "ESPAÑOLA");
	$carta3 = new Carta("5","COPA", "ESPAÑOLA");
	$array1= array();
	$mazo = new Mazo($array1);
	$this->assertTrue($mazo->esVacio());
	$array2= array($carta1,$carta2,$carta3);
	$mazo2 = new Mazo($array2);
	$this->assertFalse($mazo2->esVacio());
}

    public function testMezclable() {
	$carta1 = new Carta("9","ORO", "ESPAÑOLA");
	$carta2 = new Carta("8","COPA", "ESPAÑOLA");
	$carta3 = new Carta("5","COPA", "ESPAÑOLA");
	$array= array($carta1,$carta2,$carta3);
	$mazo = new Mazo($array);
	$this->assertTrue($mazo->mezclar());
    }

    public function testObtenerCantidad(){
	$carta1 = new Carta("9","ORO", "ESPAÑOLA");
	$carta2 = new Carta("8","COPA", "ESPAÑOLA");
	$carta3 = new Carta("5","COPA", "ESPAÑOLA");
	$array= array($carta1,$carta2,$carta3);
	$mazo = new Mazo($array);
	$this->assertEquals($mazo->obtenerCantidad(),3);
	}
}
