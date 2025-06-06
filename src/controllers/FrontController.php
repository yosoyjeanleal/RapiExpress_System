<?php
namespace RapiExpress;

class FrontController
{
    private array $specialControllers = [
        'auth'     => ['methods' => ['login', 'register', 'recoverPassword', 'logout'], 'default' => 'login'],
        'dashboard'=> ['methods' => ['index'], 'default' => 'index'],
        'cliente'  => ['methods' => ['index', 'registrar', 'editar', 'eliminar', 'obtenerCliente'], 'default' => 'index'],
        'tienda'   => ['methods' => ['index', 'registrar', 'editar', 'eliminar', 'obtenerTienda'], 'default' => 'index'],
        'courier'  => ['methods' => ['index', 'registrar', 'editar', 'eliminar', 'obtenerTienda'], 'default' => 'index'],
        'paquete'  => ['methods' => ['index', 'registrar', 'editar', 'eliminar', 'obtenerTienda'], 'default' => 'index'],
        'usuario'  => ['methods' => ['index', 'registrar', 'editar', 'eliminar', 'obtenerUsuario'], 'default' => 'index']
    ];

    public function handle(string $controller, string $action): void
    {
        try {
            if (array_key_exists($controller, $this->specialControllers)) {
                $config = $this->specialControllers[$controller];
                $methodToCall = in_array($action, $config['methods']) ? $action : $config['default'];

                // Ahora controlador procedimental está en el mismo directorio que FrontController
                $controllerFile = __DIR__ . "/$controller.php";

                if (!file_exists($controllerFile)) {
                    throw new \Exception("Controlador '$controllerFile' no encontrado.");
                }

                require_once $controllerFile;

                $functionName = $controller . '_' . $methodToCall;

                if (!function_exists($functionName)) {
                    throw new \Exception("Función '$functionName' no encontrada en controlador '$controller'");
                }

                $functionName();
            } else {
                throw new \Exception("Controlador '$controller' no está configurado como procedimental.");
            }
        } catch (\Exception $e) {
            http_response_code(500);
            echo "Error: " . $e->getMessage();
            exit;
        }
    }
}
