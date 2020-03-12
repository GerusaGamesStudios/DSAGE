<?php

include (dirname(__DIR__)."../../Model/Personal.php");
$p = new Personal($rfc,$nss,$nombre,$apellidop,$apellidom,$puesto,$sueldo,$horario,$telefono,$direccion);
?>
<main>
    <div class="headSpace">
    </div>
    <section>
        <div class="addpers">
            <form action="">
                <input type="text" placeholder="RFC">
                <input type="text" placeholder="NSS">
                <input type="text" placeholder="Nombre">
                <input type="text" placeholder="Apellido Paterno">
                <input type="text" placeholder="Apellido Materno">
                <input type="text" placeholder="Puesto">
                <input type="text" placeholder="sueldo">
                <input type="text" placeholder="Horario">
                <input type="text" placeholder="Teléfono">
                <input type="text" placeholder="Dirección">
                <input type="submit" value="Registrar">
            </form>
        </div>
    </section>

</main>
