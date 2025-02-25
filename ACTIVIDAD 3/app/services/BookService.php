<?php
require_once '../app/repositories/BookRepository.php';
require_once '../app/models/Book.php';

class BookService {
    private $bookRepo;

    public function __construct() {
        $this->bookRepo = new BookRepository();
    }

    public function getAllBooks() {
        return $this->bookRepo->getAll();
    }

    public function getBookById($id) {
        if (!is_numeric($id) || $id <= 0) {
            return null;
        }
        return $this->bookRepo->getById($id);
    }

    public function createBook($data) {
        if (empty($data['titulo']) || empty($data['autor_id'])) {
            return ['error' => 'Título y Autor son obligatorios'];
        }

        $book = new Book(null, $data['titulo'], $data['genero'] ?? null, $data['autor_id']);
        return $this->bookRepo->create($book);
    }

    public function editBook($data) {
        if (empty($data['id']) || empty($data['titulo']) || empty($data['autor_id'])) {
            return ['error' => 'ID, Título y Autor son obligatorios'];
        }

        $book = new Book($data['id'], $data['titulo'], $data['genero'] ?? null, $data['autor_id']);
        return $this->bookRepo->edit($book);
    }

    public function deleteBook($id) {
        if (!is_numeric($id) || $id <= 0) {
            return ['error' => 'ID inválido'];
        }

        return $this->bookRepo->delete($id);
    }
}
?>
