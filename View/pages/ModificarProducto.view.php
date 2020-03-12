<?php 
include (dirname(__DIR__)."../../Model/Producto.php");
$p = new Producto($ID_Producto, $NombreProducto, $Precio, $Descripción, $newpreparacion, $tipo);
?>

<div class="headSpace">

</div>

<section>
    <div class="ModificarProducto">
        <?php foreach($productos as $producto):?>
            <div class="producto">
                <div class="btnModificar">

                </div>
            </div>

            <div class="info">
                <h1> <?php echo $producto["NOMBRE"]?> </h1>
                <h2> <?php echo $producto["DESCRIPCION"]?> </h2>
                <h3> <?php echo $producto["PRECIO"]?> </h3>
                <h4> <?php echo $producto["TIPO"]?> </h4>
            </div>
            <?php endforeach ?>
    </div>
</section>

<main>
    <div class="addpets">
        <form action="">
            <input type="text" placeholder="Id">
            
            <input type="text" placeholder="Id">
            <input type="text" placeholder="Nombre">
            <input type="text" placeholder="Precio">
            <textarea type="text" placeholder="Descripción">
            <textarea type="text" placeholder="Preparación">
            <input type="text" placeholder="Tipo">
            <input type="submit" value="Modificar">
        </form>
    </div>
</main>

