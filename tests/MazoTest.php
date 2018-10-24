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
		$mazo = new Mazo($array, "ESPAÑOLA");
        $this->assertTrue(isset($mazo));
    }

    public function testTieneCartas(){
	$carta1 = new Carta("9","ORO", "ESPAÑOLA");
	$carta2 = new Carta("8","COPA", "ESPAÑOLA");
	$carta3 = new Carta("5","COPA", "ESPAÑOLA");
	$array1= array();
	$mazo = new Mazo($array1, "ESPAÑOLA");
	$this->assertTrue($mazo->esVacio());
	$array2= array($carta1,$carta2,$carta3);
	$mazo2 = new Mazo($array2, "ESPAÑOLA");
	$this->assertFalse($mazo2->esVacio());
}

    public function testMezclable() {
	$carta1 = new Carta("9","ORO", "ESPAÑOLA");
	$carta2 = new Carta("8","COPA", "ESPAÑOLA");
	$carta3 = new Carta("5","COPA", "ESPAÑOLA");
	$array= array($carta1,$carta2,$carta3);
	$mazo = new Mazo($array, "ESPAÑOLA");
	$this->assertTrue($mazo->mezclar());
    }

    public function testObtenerCantidad(){
	$carta1 = new Carta("9","ORO", "ESPAÑOLA");
	$carta2 = new Carta("8","COPA", "ESPAÑOLA");
	$carta3 = new Carta("5","COPA", "ESPAÑOLA");
	$array= array($carta1,$carta2,$carta3);
	$mazo = new Mazo($array, "ESPAÑOLA");
	$this->assertEquals($mazo->obtenerCantidad(),3);
	}

	public function testobtenerCarta(){
	$carta1 = new Carta("9","ORO", "ESPAÑOLA");
	$carta2 = new Carta("8","COPA", "ESPAÑOLA");
	$carta3 = new Carta("5","COPA", "ESPAÑOLA");
	$array= array($carta1,$carta2,$carta3);
	$mazo = new Mazo($array, "ESPAÑOLA");

	$this->assertEquals($mazo->obtenerCarta(),$carta1);
	}

	public function testAgregarCarta(){
		$carta1 = new Carta("9","CORAZONES", "POKER");
		$carta2 = new Carta("8","PICAS", "POKER");
		$carta3 = new Carta("5","TREBOLES", "POKER");
		$carta4 = new Carta("6","PALO", "ESPAÑOLA");

		$array= array($carta1,$carta2);
		$mazo = new Mazo($array, "POKER");

		$this->assertTrue($mazo->agregarCarta($carta3));
		$this->assertFalse($mazo->agregarCarta($carta4));
		
	}

	public function testcortar(){
		$carta1 = new Carta("9","CORAZONES", "POKER");
		$carta2 = new Carta("8","PICAS", "POKER");
		$carta3 = new Carta("5","TREBOLES", "POKER");
		$carta4 = new Carta("Q","PICAS", "POKER");
		$array= array($carta1,$carta2,$carta3,$carta4);
		$mazo = new Mazo($array, "POKER");

		$this->assertTrue($mazo->cortar());
	}
}
