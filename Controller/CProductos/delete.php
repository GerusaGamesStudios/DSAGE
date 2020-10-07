<link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
<?php
    require 'require.php';
    require '../../../DSAGE/Model/PatternStrategy/iStrategy.class.php';
    require '../../../DSAGE/Model/PatternStrategy/StrategyEliminar.class.php';
    require '../../../DSAGE/View/headers/header.index.php';
    include_once (dirname(__DIR__)."../../Model/Producto.php");

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
    $producto = new Producto($idProd,$nombre,$precio,$descripcion,$preparacion,$tipo);

    $cliente = new Cliente($producto);
    /*echo $producto->getNombreProducto() . '<br>';
    echo $producto->getPrecio() . '<br>';
    echo $producto->getDescripción() . '<br>';
    echo $producto->get_Preparacion() . '<br>';
    echo $producto->get_Tipo() . '<br>';
    var_dump($producto);*/
    echo $cliente->setStrategy(new StrategyEliminar());
    echo "<script>
              alert('De nada, vuelva pronto');
              document.location='../../index.php'
          </script>";
?>