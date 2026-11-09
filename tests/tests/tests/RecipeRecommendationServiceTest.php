<?php

use PHPUnit\Framework\TestCase;

/**
 * Clase de prueba unitaria para la evaluación de filtros y restricciones alérgenas en recetas.
 */
class RecipeRecommendationServiceTest extends TestCase
{
    /**
     * @test
     * CP-003: Comprueba que el algoritmo de recomendaciones rechace recetas con alérgenos no permitidos.
     */
    public function test_receta_con_alergeno_retorna_falso()
    {
        // 1. Instanciación del servicio de recomendaciones nutricionales
        $recipeService = new RecipeRecommendationService();

        // 2. Evaluación de compatibilidad de receta ID 105 contra el alérgeno "maní"
        $esApta = $recipeService->validarCompatibilidadReceta(105, ["mani"]);

        // 3. Aserción para verificar que la respuesta sea estrictamente 'false'
        $this->assertFalse($esApta);
    }
}
