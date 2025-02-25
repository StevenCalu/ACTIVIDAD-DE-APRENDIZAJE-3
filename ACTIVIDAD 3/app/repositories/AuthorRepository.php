<?php
require_once '../app/config/database.php';
require_once '../app/models/Author.php';

class AuthorRepository {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::connect();
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM Autor");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM Autor WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create(Author $author) {
        $stmt = $this->pdo->prepare("INSERT INTO Autor (nombre, nacionalidad) VALUES (:nombre, :nacionalidad)");
        return $stmt->execute([
            ':nombre' => $author->nombre,
            ':nacionalidad' => $author->nacionalidad
        ]);
    }

    public function edit(Author $author) {
        $stmt = $this->pdo->prepare("UPDATE Autor SET nombre = :nombre, nacionalidad = :nacionalidad WHERE id = :id");
        return $stmt->execute([
            ':nombre' => $author->nombre,
            ':nacionalidad' => $author->nacionalidad,
            ':id' => $author->id
        ]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM Autor WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}
?>
