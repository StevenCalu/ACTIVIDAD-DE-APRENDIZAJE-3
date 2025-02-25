<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Libros</title>
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <!-- Menú de navegación -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="home">Inicio</a>
      <div class="collapse navbar-collapse">
         <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link active" href="books">Libros</a></li>
            <li class="nav-item"><a class="nav-link" href="authors">Autores</a></li>
         </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
      <h1>Gestión de Libros</h1>
      <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#bookModal" onclick="openModal('create')">Crear Libro</button>
      
      <!-- Lista de libros -->
      <table class="table">
         <thead>
           <tr>
             <th>ID</th>
             <th>Título</th>
             <th>Autor</th>
             <th>Acciones</th>
           </tr>
         </thead>
         <tbody>
           <?php foreach($books as $book): ?>
           <tr>
             <td><?= $book['id']; ?></td>
             <td><?= $book['title']; ?></td>
             <td><?= $book['author']; ?></td>
             <td>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bookModal" onclick="openModal('edit', <?= $book['id']; ?>)">Editar</button>
                <button class="btn btn-danger btn-sm" onclick="deleteBook(<?= $book['id']; ?>)">Eliminar</button>
             </td>
           </tr>
           <?php endforeach; ?>
         </tbody>
      </table>
  </div>

  <!-- Modal para crear/editar libro -->
  <?php include 'formModal.php'; ?>

  <!-- Librerías JS: Bootstrap y Axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/app.js"></script>
</body>
</html>
