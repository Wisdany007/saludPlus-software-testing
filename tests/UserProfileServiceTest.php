<?php

use PHPUnit\Framework\TestCase;

/**
 * Clase de prueba unitaria para validar el servicio de gestión de perfil de usuario.
 */
class UserProfileServiceTest extends TestCase
{
    /**
     * @test
     * CP-001: Verifica que el servicio rechace correos con formato inválido arrojando excepción.
     */
    public function test_registro_correo_invalido_lanza_excepcion()
    {
        // 1. Configuración de la expectativa de excepción
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Formato de correo inválido");

        // 2. Instanciación del servicio de perfil
        $profileService = new UserProfileService();

        // 3. Ejecución de la prueba pasando un email malformado (sin '@' ni dominio)
        $profileService->registrarUsuario("usuario_saludable.com", "Salud2026!", 70);
    }
}
