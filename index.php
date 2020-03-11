<?php
      // require 'View/headers/header.index.php';
      // require 'View/pages/index.view.php';
      // require 'View/footers/footer.view.php';

    //Prueba para Añadir cuenta a la DB;;;
    require 'Model/Comprobante.php';

    $Orden = new Orden();
    $producto = new Producto('0981','Nombre','456','Descripcion','Preparacion','Tipo');
    $Orden->productoAOrden($Orden->productos, $producto)
    $comprobante = new Comprobante($Orden);
?>