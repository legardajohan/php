<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP</title>
</head>
<body>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="src/logo.svg" alt="" height="35" class="d-inline-block align-text-top">
        </a>
    <a class="navbar-brand" href="#">PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo $pages == 'select' ? 'active' : '' ?>" href="?p=select">Consultar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $pages == 'insert' ? 'active' : '' ?>" href="?p=insert">Insertar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $pages == 'update' ? 'active' : '' ?>" href="?p=update">Actualizar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $pages == 'delete' ? 'active' : '' ?>" href="?p=delete">Eliminar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- Fin menu -->

    <div style="width:100%; height: 600px; text-align:center; padding-top: 20px; background-color: rgb(247, 245, 244);">
        <div class="shadow p-3 mb-5 bg-body rounded" style="width: 400px; margin:0px auto;">