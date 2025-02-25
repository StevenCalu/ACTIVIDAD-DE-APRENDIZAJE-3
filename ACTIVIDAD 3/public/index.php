<?php
// Configurar encabezados para respuestas JSON y permitir CORS.
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Incluir el enrutador y los controladores.
require_once __DIR__ . '/../app/core/Router.php';
require_once __DIR__ . '/../app/controllers/AuthorController.php'; 
require_once __DIR__ . '/../app/controllers/BookController.php'; 

$router = new Router();

// Rutas para Autores.
$authorController = new AuthorController();
$router->add('GET', '/authors', fn() => $authorController->index());
$router->add('POST', '/authors', fn() => $authorController->create());
$router->add('PUT', '/authors', fn() => $authorController->edit());
$router->add('DELETE', '/authors', fn() => $authorController->delete());


$bookController = new BookController();
$router->add('GET', '/books', fn() => $bookController->index());
$router->add('POST', '/books', fn() => $bookController->create());
$router->add('PUT', '/books', fn() => $bookController->edit());
$router->add('DELETE', '/books', fn() => $bookController->delete());

// Obtener la URI solicitada.
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$basePath = '/Actividad de Aprendizaje 3/public'; 
if (strpos($uri, $basePath) === 0) {
    $uri = substr($uri, strlen($basePath));
}
if ($uri == '') {
    $uri = '/';
}


$router->dispatch($_SERVER['REQUEST_METHOD'], $uri);
?>
