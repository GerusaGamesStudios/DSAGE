<?php
include (dirname(__DIR__)."../../Model/Menu.php");
$m = new Menu();
$productos = $m->getAllProductosBd();
?>
<div class="headSpace">

</div>
<div class="btnCarrito">
    <div id="btnCarrito">
        <i class="fas fa-cart-plus"></i>
    </div>
</div>
<section>
    <div class="secCont">
        <div class="menuPrincipal">
        <?php foreach($productos as $producto):?>
            <div class="producto">
                <div class="imagen">
                    <img src="https://source.unsplash.com/random/200x200" alt="" srcset="">
                </div>
                <div class="info">
                    <h1><?php echo $producto["NOMBRE"]?></h1>
                    <h2><?php echo $producto["DESCRIPCION"]?></h2>
                    <h3> <?php echo $producto["PRECIO"]?>  MXN </h3>
                    <h4><?php echo $producto["TIPO"]?></h4>
                </div>
            </div>
        <?php endforeach?>
        </div>
    </div>
</section>