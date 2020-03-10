<?php
    // require 'View/headers/header.index.php';
    // require 'View/pages/index.view.php';
    // require 'View/footers/footer.view.php';

    //Prueba para Añadir cuenta a la DB;;;
      require 'Model/Cuenta.php';
     $cuenta = new Cuenta('9876', 'Mesero', 'luish_991@hotmail.com', 'wordless', 'wordless');
     $cuenta->VisualizarCuenta();
     $cuenta->AñadirCuenta();
?>