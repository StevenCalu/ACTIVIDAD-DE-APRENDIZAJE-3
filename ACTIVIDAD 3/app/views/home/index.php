<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title><?= $data['projectName']; ?></title>
  <link rel="stylesheet" href="public/assets/css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="home">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="books">Libros</a></li>
            <li class="nav-item"><a class="nav-link" href="authors">Autores</a></li>
         </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
      <h1><?= $data['projectName']; ?></h1>
      <p>Integrante: <?= $data['integrante']; ?></p>
      <p>Esta aplicación permite gestionar libros y autores de forma sencilla.</p>
      <div>
          <a href="books" class="btn btn-primary">Gestionar Libros</a>
          <a href="authors" class="btn btn-secondary">Gestionar Autores</a>
      </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
