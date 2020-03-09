<?php
// require 'View/headers/header.index.php';
// require 'View/pages/index.view.php';
// require 'View/footers/footer.view.php';
require 'Model/Menu.php';

$m = new Menu();
$datos = $m->getAllProductosBd();
var_dump( $datos);

?>