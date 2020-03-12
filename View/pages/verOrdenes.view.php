<?php
include (dirname(__DIR__)."../../Model/GestorOrden.php");
    $gestor = new GestorOrden();
    $ordenes = $gestor->getOrdenes();
?>
<main>
<div class="headSpace">

</div>
ordenes
<?php var_dump($ordenes)?>
</main>