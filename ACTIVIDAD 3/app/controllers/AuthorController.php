<?php
require_once __DIR__ . '/../repositories/AuthorRepository.php';

class AuthorController {
    private $authorRepo;

    public function __construct() {
        $this->authorRepo = new AuthorRepository();
    }

    // Muestra la lista de autores
    public function index() {
        $authors = $this->authorRepo->getAll();
        require_once '../app/views/authors/list.php';
    }

    // Método para crear un autor
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $author = new Author(null, $_POST['nombre'] ?? '', $_POST['nacionalidad'] ?? '');
            $result = $this->authorRepo->create($author);
            echo json_encode(['success' => $result]);
        }
    }

    // Método para editar un autor
    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $author = new Author($_POST['id'] ?? '', $_POST['nombre'] ?? '', $_POST['nacionalidad'] ?? '');
            $result = $this->authorRepo->edit($author);
            echo json_encode(['success' => $result]);
        }
    }

    // Método para eliminar un autor
    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? '';
            $result = $this->authorRepo->delete($id);
            echo json_encode(['success' => $result]);
        }
    }
}
?>
