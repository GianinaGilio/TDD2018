<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear cartas.
     */
    public function testExiste() {
        $carta = new Carta(2);
        $this->assertTrue(isset($carta));
    }

    
}
