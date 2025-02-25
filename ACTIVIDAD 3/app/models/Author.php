<?php
class Author {
    public $id;
    public $nombre;        // Asegúrate de que esta propiedad esté correctamente nombrada
    public $nacionalidad;

    public function __construct($id, $nombre, $nacionalidad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
    }
}
?>
