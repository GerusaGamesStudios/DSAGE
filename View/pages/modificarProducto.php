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
    <title>Modificar producto</title>
</head>

<?php
    include (dirname(__DIR__)."../../Model/Producto.php");
    $idProd = $_GET['id'];
    $query = Producto::BuscarProducto($idProd);
    $query->data_seek(0);
    while ($fila = $query->fetch_array()) {
        $nombre = $fila["NOMBRE"];
        $precio = $fila["PRECIO"];
        $descripcion = $fila["DESCRIPCION"];
        $preparacion = $fila["PREPARACION"];
        $tipo = $fila["TIPO"];
    }
    $result = new Producto($idProd,$nombre,$precio,$descripcion,$preparacion,$tipo);
?>
  <body>
    <div class="container-fluid">
      <div class="row">
          <div class=".col-sm-7 col-sm-offset-3 col-md-5 col-md-offset-2 main">
            <h2>Modificar producto.</h2>
          </div>
          <div class=".col-sm-7 col-sm-offset-3 col-md-5 col-md-offset-2 main">
          <form name=formulario action="../../Controller/CProductos/modify.php" method="post">
                <div class="form-group shadow-textarea">
                    <label for="nombre">ID</label>
                    <input name = "idProd" type="text" class="form-control" id="idProd" placeholder="Unable" value=" <?php echo $result->getID_Producto(); ?> " readonly>
                </div>
                <div class="form-group shadow-textarea">
                    <label for="nombre">Nombre</label>
                    <input name = "nombre" type="text" class="form-control" id="Nombre" placeholder="Enter a name" value=" <?php echo $result->getNombreProducto(); ?> ">
                </div>
                <div class="form-group shadow-textarea">
                    <label for="precio">Precio</label>
                    <input name = "precio" type="number" class="form-control" id="precio" placeholder="Enter a price $" value= <?php echo intval($result->getPrecio()); ?> >
                </div>
                <div class="form-group shadow-textarea">
                    <label for="descripcion">Descripción</label>
                    <textarea name = "descripcion" class="form-control z-depth-1" id="descripcion" rows="3" placeholder="Enter a description"> <?php echo $result->getDescripción(); ?>  </textarea>
                </div>
                <div class="form-group shadow-textarea">
                    <label for="preparacion">Preparacion</label>
                    <input name = "preparacion" type="text" class="form-control" id="preparacion" placeholder="Enter a time of preparation MM:SS" value=" <?php echo $result->get_Preparacion(); ?> ">
                </div>
                <div class="form-group shadow-textarea">
                    <label for="tipo">Tipo</label>
                    <input name = "tipo"  type="text" class="form-control" id="tipo" placeholder="Enter a type" value=" <?php echo $result->get_Tipo(); ?> ">
                </div>
                <button type="submit" class="btn btn-primary">Modificar</button>
                <a href="http://localhost/CursoPHP/DSAGE/View/pages/administrarProductos.php" class="btn btn-danger" role="button">Cancelar</a>
            </form>
          </div>
        </main>
      </div>
    </div>
    <footer>
        
    </footer>
    </body>
    </html>
