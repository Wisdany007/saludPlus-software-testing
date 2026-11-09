<?php

use PHPUnit\Framework\TestCase;

/**
 * Clase de prueba unitaria para el cálculo matemático de metas y seguimiento de hábitos.
 */
class HabitTrackerServiceTest extends TestCase
{
    /**
     * @test
     * CP-002: Valida que la fórmula de ingesta hídrica diaria (35 ml * kg) calcule el valor exacto.
     */
    public function test_calculo_meta_hidratacion_correcto()
    {
        // 1. Instanciación del servicio de seguimiento de hábitos
        $habitService = new HabitTrackerService();

        // 2. Cálculo de la meta para un usuario con peso biométrico de 70 kg
        $metaCalculada = $habitService->calcularMetaHidratacion(70);

        // 3. Verificación de que el resultado sea exactamente 2450 ml (70 * 35 ml)
        $this->assertEquals(2450, $metaCalculada);
    }
}
