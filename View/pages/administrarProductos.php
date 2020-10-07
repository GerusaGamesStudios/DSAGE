<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/header.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        *{
            font-family: 'Roboto','Arial';
        }
        section{
            width: 100%;
            padding: 20px;
        }
        section input[type="text"]{
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .headSpace{
            min-height: 12vh;
        }
    </style>
    <title>Administrar menú</title>
</head>

  <?php
    include (dirname(__DIR__)."../../Model/Producto.php");
    $productos = Producto::getAllProductos();
  ?>

  <body>
    <div class="container-fluid">
      <div class="row">
          <h2>Administración del menú.</h2>
          <nav class="navbar navbar-dark bg-primary">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Mayahuel <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/CursoPHP/DSAGE/View/pages/addProducto.php">Nuevo producto</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Análisis de ventas</a>
                </li>
              </ul>
            </div>
          </nav>
          <div class=".col-sm-10 col-sm-offset-2 col-md-10 col-md-offset-0 main">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Descripción</th>
                  <th>Tiempo de preparación(MM:SS)</th>
                  <th>Tipo</th>
                  <th>¿Modificar?</th>
                  <th>¿Borrar?</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($productos as $producto):?>
                <tr>
                  <th> <?php echo $producto["idPRODUCTO"]?> </th>
                  <th> <?php echo htmlspecialchars ($producto["NOMBRE"])?> </th>
                  <th> <?php echo $producto["PRECIO"]?> </th>
                  <th> <?php echo htmlspecialchars ($producto["DESCRIPCION"])?> </th>
                  <th> <?php echo htmlspecialchars ($producto["PREPARACION"])?> <br> </th>
                  <th> <?php echo htmlspecialchars ($producto["TIPO"])?> <br> </th>
                  <th> <a href="http://localhost/CursoPHP/DSAGE/View/pages/modificarProducto.php?id=<?php echo $producto['idPRODUCTO']?>" type="sumbit" class="btn btn-primary" role="button">Modificar</a> </th>
                  <th> <a href="http://localhost/CursoPHP/DSAGE/Controller/CProductos/delete.php?id=<?php echo $producto['idPRODUCTO']?>" type="sumbit" class="btn btn-danger" role="button">Eliminar</a> </th>
                </tr>
                <?php endforeach?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
    <footer>
        
    </footer>
    </body>
    </html>