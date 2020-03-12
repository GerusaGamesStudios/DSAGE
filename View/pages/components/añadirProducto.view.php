<?php 

    include(dirname(__DIR__)."../../Model/Producto.php");
    $p = new Producto($ID_Producto, $NombreProducto, $Precio, $Descripcion, $newpreparacion, $tipo);
?>

<main>
    <div class="addpets">
        <form action="">
            <input type="text" placeholder="Id">
            <input type="text" placeholder="Nombre">
            <input type="text" placeholder="Precio">
            <textarea type="text" placeholder="Descripción">
            <textarea type="text" placeholder="Preparación">
            <input type="text" placeholder="Tipo">
            <input type="submit" value="Ingresar">
        </form>
    </div>
</main>