<?php
include (dirname(__DIR__)."../../Model/Personal.php");
$empleados = $m->getAllPersonalDB();
?>

<section>
    <div class="secCont">
        <div class="EliminarPersonal">
        <?php foreach($empleados as $empleado):?>
            <div class="empleado">
                <div class="btnEliminar">
                    <div id="btnDelete" data-idprod="<?php echo $empleado["RFC"]?>">
                        <i class="fas fa-cart-plus"></i>
                    </div>
                </div>
                <div class="info">
                    <h1><?php echo $empleado["RFC"]?></h1>
                    <h2><?php echo $empleado["Nombre"]?></h2>
                    <h2> <?php echo $empleado["ApellidoP"]?></h2>
                    <h2><?php echo $empleado["ApellidoM"]?></h2>
                </div>
            </div>
        <?php endforeach?>
        </div>
    </div>
</section>