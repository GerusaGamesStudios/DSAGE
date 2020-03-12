<?php
include (dirname(__DIR__)."../../Model/Personal.php");
$empleados = Personal::getAllPersonalDB();
?>
<div class="headSpace">

</div>
<section>
    <div class="secCont">
        <div class="EliminarPersonal">
        <?php foreach($empleados as $empleado):?>
        <div class="row">
            <div class="col-md-3 mx-auto my-5">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://source.unsplash.com/random/200x200" alt="" srcset="">
                    <div class="card-block">
                        <h1 class="card-title"><?php echo "RFC: " . $empleado["RFC"]?></h1>
                        <?php echo "NSS: " . $empleado["NSS"]?> <br>
                        <?php echo "Nombre: " . $empleado["Nombre"]?>
                        <?php echo $empleado["ApellidoP"]?>
                        <?php echo $empleado["ApellidoM"]?>
                        <?php echo "Puesto: " . $empleado["Puesto"]?> <br>
                        <?php echo "Sueldo: " . $empleado["Sueldo"]?> <br>
                        <?php echo "Horario: " . $empleado["Horario"]?> <br>
                        <?php echo "Telefono: " . $empleado["Telefono"]?> <br>
                        <?php echo "Direccion: " . $empleado["Direccion"]?> <br>
                        <button type="button" class="btn btn-danger"> ¡FUERA DE MI VISTA! </button>
                        <button type="button" class="btn btn-primary"> Modificar </button>
                    <div>
                </div>
            </div>
        </div>
        <?php endforeach?>
        </div>
    </div>
</section>