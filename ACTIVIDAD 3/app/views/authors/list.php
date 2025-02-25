<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Autores</title>
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
            <li class="nav-item"><a class="nav-link" href="books">Libros</a></li>
            <li class="nav-item"><a class="nav-link active" href="authors">Autores</a></li>
         </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
      <h1>Gestión de Autores</h1>
      <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#authorModal" onclick="openAuthorModal('create')">Crear Autor</button>
      
      <!-- Lista de autores -->
      <table class="table">
         <thead>
           <tr>
             <th>ID</th>
             <th>Nombre</th>
             <th>Acciones</th>
           </tr>
         </thead>
         <tbody>
           <?php foreach($authors as $author): ?>
           <tr>
             <td><?= $author['id']; ?></td>
             <td><?= $author['name']; ?></td>
             <td>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#authorModal" onclick="openAuthorModal('edit', <?= $author['id']; ?>)">Editar</button>
                <button class="btn btn-danger btn-sm" onclick="deleteAuthor(<?= $author['id']; ?>)">Eliminar</button>
             </td>
           </tr>
           <?php endforeach; ?>
         </tbody>
      </table>
  </div>

  <!-- Incluir el modal -->
  <?php include 'formModal.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/app.js"></script>
</body>
</html>
