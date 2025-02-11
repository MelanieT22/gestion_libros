<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio - Gestión de Libros</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('https://logistica-ugt.espe.edu.ec/wp-content/uploads/2018/11/espe-banner-administrativo.jpg') no-repeat center center fixed; height: 100%;
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.54);
      z-index: -1;
    }

    .container-custom {
      min-height: 100vh;
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: relative;
      z-index: 2;
    }

    .btn-custom {
      background-color:rgb(40, 54, 39);
      color: white;
      font-size: 20px;
      padding: 15px 30px;
      border-radius: 10px;
      text-decoration: none;
      border: none;
    }
    .container-custom a {
      color: white;
    }
    
    .btn-custom:hover {
      background-color:rgba(38, 117, 64, 0.49);
    }
  </style>
</head>
<body>

  <?php include "menu.php"; ?>

  <div class="overlay"></div>

  <div class="container container-custom">
    <h1>Bienvenido al Sistema de Gestión de Libros</h1>
    <p>Administra y gestiona tus libros de manera sencilla y eficiente.</p>
    <a href="registrar.php" class="btn btn-custom">Registro de Libros</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
