<?php
require_once '../services/BookService.php';


class BookController {
    private $bookService;

    public function __construct() {
        $this->bookService = new BookService();
    }

    public function index() {
        $books = $this->bookService->getAllBooks();
        require_once '../app/views/books/list.php';
    }

    public function show($id) {
        $book = $this->bookService->getBookById($id);
        require_once '../app/views/books/detail.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $result = $this->bookService->createBook($_POST);
            echo json_encode($result);
        }
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $result = $this->bookService->editBook($_POST);
            echo json_encode($result);
        }
    }

    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $result = $this->bookService->deleteBook($_POST['id']);
            echo json_encode($result);
        }
    }
}
?>
