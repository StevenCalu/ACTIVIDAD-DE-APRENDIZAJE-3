<?php
require_once '../app/repositories/AuthorRepository.php';
require_once '../app/models/Author.php';

class AuthorService {
    private $authorRepo;

    public function __construct() {
        $this->authorRepo = new AuthorRepository();
    }

    public function getAllAuthors() {
        return $this->authorRepo->getAll();
    }

    public function getAuthorById($id) {
        if (!is_numeric($id) || $id <= 0) {
            return null;
        }
        return $this->authorRepo->getById($id);
    }

    public function createAuthor($data) {
        if (empty($data['nombre'])) {
            return ['error' => 'El nombre es obligatorio'];
        }

        $author = new Author(null, $data['nombre'], $data['nacionalidad'] ?? null);
        return $this->authorRepo->create($author);
    }

    public function editAuthor($data) {
        if (empty($data['id']) || empty($data['nombre'])) {
            return ['error' => 'ID y Nombre son obligatorios'];
        }

        $author = new Author($data['id'], $data['nombre'], $data['nacionalidad'] ?? null);
        return $this->authorRepo->edit($author);
    }

    public function deleteAuthor($id) {
        if (!is_numeric($id) || $id <= 0) {
            return ['error' => 'ID inválido'];
        }

        return $this->authorRepo->delete($id);
    }
}
?>
