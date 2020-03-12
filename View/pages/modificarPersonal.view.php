<?php

include (dirname(__DIR__)."../../Model/Personal.php");
$result = Personal::BuscarPersonal($id); //Consultar de donde viene el id
?>
<main>
    <div class="headSpace">
    </div>
    <section>
        <div class="addpers">
            <form action="">
                <input type="text" placeholder="RFC" value='<?php $result["RFC"] ?>'>
                <input type="text" placeholder="NSS" value='<?php $result["NSS"] ?>'>
                <input type="text" placeholder="Nombre" value='<?php $result["Nombre"] ?>'>
                <input type="text" placeholder="Apellido Paterno" value='<?php $result["ApellidoP"] ?>'>
                <input type="text" placeholder="Apellido Materno" value='<?php $result["ApellidoM"] ?>'>
                <input type="text" placeholder="Puesto" value='<?php $result["Puesto"] ?>'>
                <input type="text" placeholder="sueldo" value='<?php $result["Sueldo"] ?>'>
                <input type="text" placeholder="Horario" value='<?php $result["Horario"] ?>'>
                <input type="text" placeholder="Teléfono" value='<?php $result["Telefono"] ?>'>
                <input type="text" placeholder="Dirección" value='<?php $result["Direccion"] ?>'>
                <input type="submit" value="Modificar">
            </form>
        </div>
    </section>
</main>
