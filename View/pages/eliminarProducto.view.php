<?php 
include (dirname(__DIR__)."../../Model/Producto.php");
$p = new Producto($ID_Producto, $NombreProducto, $Precio, $Descripción, $newpreparacion, $tipo);
?>

<div class="headSpace">

</div>

<section>
    <div class="secCont">
        <div class="EliminarProducto">
            <?php foreach($productos as $producto):?>
                <div class="producto">
                    <div class="btnEliminar">

                    </div>
                </div>

                <div class="info">
                    <h1> <?php echo $producto["NOMBRE"]?> </h1>
                    <h2> <?php echo $producto["DESCRIPCION"]?> </h2>
                    <h3> <?php echo $producto["PRECIO"]?> </h3>
                    <h4> <?php echo $producto["TIPO"]?> </h4>
                </div>
                
        </div>
        <?php endforeach ?>
    </div>
</section>