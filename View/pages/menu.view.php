<?php
include (dirname(__DIR__)."../../Model/Menu.php");
$m = new Menu();
$productos = $m->getAllProductosBd();
?>
<div class="headSpace">

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
                    <h3><?php echo $producto["DESCRIPCION"]?></h3>
                </div>
                    <h2> <?php echo $producto["PRECIO"]?>  MXN </h2>
                    <h3><?php echo $producto["TIPO"]?></h3>
            </div>
        <?php endforeach?>
        </div>
    </div>
</section>