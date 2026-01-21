<?php

use PHPUnit\Framework\TestCase;
use App\Saludo;

class SaludoTest extends TestCase
{
    public function testGenerarSaludoAleatorioDevuelveSaludoValido()
    {
        $saludo = new Saludo();
        $resultado = $saludo->generarSaludoAleatorio();

        // Verifica que el saludo existe y es un string no vacío
        $this->assertArrayHasKey('saludo', $resultado);
        $this->assertIsString($resultado['saludo']);
        $this->assertNotEmpty($resultado['saludo']);
    }

    public function testGenerarSaludoAleatorioDevuelveCodigoValido()
    {
        $saludo = new Saludo();
        $resultado = $saludo->generarSaludoAleatorio();

        // Verifica que el código existe y es un string no vacío
        $this->assertArrayHasKey('codigo', $resultado);
        $this->assertIsString($resultado['codigo']);
        $this->assertNotEmpty($resultado['codigo']);
    }
}
