<?php
  include_once("../../configuracion.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $Titulo; ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--LINK BOOSTRAP -->
  <link rel="stylesheet" href="../libs/bootstrap5/css/bootstrap.min.css">
  
  <!--LINK ICONOS BOOTSTRAP  -->
  <link rel="stylesheet" href="../libs/node_modules/bootstrap-icons/font/bootstrap-icons.css">
  
  <!-- LINK CSS -->
  <link rel="stylesheet" type="text/css" href="../css/header.css">
  <link rel="stylesheet" type="text/css" href="../css/footer.css">
  <link rel="stylesheet" type="text/css" href="../css/principal.css">
  
  <!--LINK JS - BOOTSTRAP-->
  <script src="../libs/bootstrap5/js/bootstrap.min.js"></script>

    <!--LINK JS - JQUERY-->
    <script src="../libs/node_modules/jquery/dist/jquery.min.js"></script>

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light p-2 fs-3">
    <div class="container-fluid">
      <a class="navbar-brand" id="pagina-principal" href="../estructura/principal.php">Grupo N°5</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://github.com/AlexisCasimiro/pwd"> <i class="bi bi-github"></i> </a>
          </li>
          <!--DROPDOWN TP1 -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button"  data-bs-toggle="dropdown" aria-expanded="false">
              TP1
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../tp1/ejercicio1.php">Ejercicio 1</a></li>
              <li><a class="dropdown-item" href="../tp1/ejercicio2.php">Ejercicio 2</a></li>
              <li><a class="dropdown-item" href="../tp1/ejercicio3.php">Ejercicio 3</a></li>
              <li><a class="dropdown-item" href="../tp1/ejercicio4.php">Ejercicio 4</a></li>
              <li><a class="dropdown-item" href="../tp1/ejercicio5.php">Ejercicio 5</a></li>
              <li><a class="dropdown-item" href="../tp1/ejercicio6.php">Ejercicio 6</a></li>
              <li><a class="dropdown-item" href="../tp1/ejercicio7.php">Ejercicio 7</a></li>
              <li><a class="dropdown-item" href="../tp1/ejercicio8.php">Ejercicio 8</a></li>
            </ul>
          </li>
          <!--DROPDOWN TP2 -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              TP2
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../tp2/ejercicio3.php">Ejercicio 3</a></li>
              <li><a class="dropdown-item" href="../tp2/ejercicio4.php">Ejercicio 4</a></li>
              <li class="nav-item dropend">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    TP1
                </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../tp1/ejercicio1.php">ejercicio 1</a></li>
                        <li><a class="dropdown-item" href="../tp1/ejercicio2.php">ejercicio 2</a></li>      
                        <li><a class="dropdown-item" href="../tp1/ejercicio3.php">ejercicio 3</a></li>
                        <li><a class="dropdown-item" href="../tp1/ejercicio4.php">ejercicio 4</a></li>

                    </ul>
              </li>
            </ul>
          </li>


          <!--DROPDOWN TP3 -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              TP3
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../tp3/ejercicio1.php">Ejercicio 1</a></li>
              <li><a class="dropdown-item" href="../tp3/ejercicio2.php">Ejercicio 2</a></li>
              <li><a class="dropdown-item" href="../tp3/ejercicio3.php">Ejercicio 3</a></li>
            </ul>
          </li>


          <!--DROPDOWN TP4 -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              TP4
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Ejercicio 1</a></li>
              <li><a class="dropdown-item" href="#">Ejercicio 2</a></li>
              <li><a class="dropdown-item" href="../tp4/verAutos.php">Ej3 Ver Autos</a></li>
              <li><a class="dropdown-item" href="../tp4/buscarAuto.php">Ej4 Buscar Auto</a></li>
              <li><a class="dropdown-item" href="../tp4/listaPersonas.php">Ej3 Lista de Personas</a></li>
              <li><a class="dropdown-item" href="../tp4/nuevaPersona.php">Ej4 Nueva Persona</a></li>
              <li><a class="dropdown-item" href="../tp4/nuevoAuto.php">Ej5 Nuevo Auto</a></li>
              <li><a class="dropdown-item" href="../tp4/cambioDuenio.php">Ej6 Cambio Dueño</a></li>
              <li><a class="dropdown-item" href="../tp4/buscarPersona.php">Ej7 Buscar Persona</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

  </nav>
