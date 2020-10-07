<link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
<?php
    require 'require.php';
    require '../../../DSAGE/Model/PatternStrategy/iStrategy.class.php';
    require '../../../DSAGE/Model/PatternStrategy/StrategyModificar.class.php';
    require '../../../DSAGE/View/headers/header.index.php';
    $producto = new Producto($_POST['idProd'],$_POST['nombre'], $_POST['precio'], $_POST['descripcion'], $_POST['preparacion'], $_POST['tipo']);
    $cliente = new Cliente($producto);
    /*echo $producto->getNombreProducto() . '<br>';
    echo $producto->getPrecio() . '<br>';
    echo $producto->getDescripción() . '<br>';
    echo $producto->get_Preparacion() . '<br>';
    echo $producto->get_Tipo() . '<br>';
    var_dump($producto);*/
    echo $cliente->setStrategy(new StrategyModificar());
    echo "<script>
              alert('De nada, vuelva pronto');
              document.location='../../index.php'
          </script>";
?>