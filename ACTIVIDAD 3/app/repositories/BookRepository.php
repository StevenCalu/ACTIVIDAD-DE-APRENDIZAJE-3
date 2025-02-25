<?php
require_once '../app/config/database.php';
require_once '../app/models/Book.php';

class BookRepository {
    private $pdo;


    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM Libro");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM Libro WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create(Book $book) {
        $stmt = $this->pdo->prepare("INSERT INTO Libro (titulo, genero, autor_id) VALUES (:titulo, :genero, :autor_id)");
        return $stmt->execute([
            ':titulo' => $book->titulo,
            ':genero' => $book->genero,
            ':autor_id' => $book->autor_id
        ]);
    }

    public function edit(Book $book) {
        $stmt = $this->pdo->prepare("UPDATE Libro SET titulo = :titulo, genero = :genero, autor_id = :autor_id WHERE id = :id");
        return $stmt->execute([
            ':titulo' => $book->titulo,
            ':genero' => $book->genero,
            ':autor_id' => $book->autor_id,
            ':id' => $book->id
        ]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM Libro WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}
?>
