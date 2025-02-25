<?php
class Book {
    public $id;
    public $titulo;        
    public $genero;
    public $autor_id;

    public function __construct($id, $titulo, $genero, $autor_id) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->autor_id = $autor_id;
    }
}
?>
