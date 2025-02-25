<?php
class HomeController {
    public function index() {
        $data = [
            'projectName' => 'Gestión de Libros y Autores',
            'integrante' => 'Anthony Javier Pardo ,Steven Caluña'
        ];
        require_once '../app/views/home/index.php';
    }
}
