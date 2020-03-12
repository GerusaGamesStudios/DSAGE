<?php

include (dirname(__DIR__)."../../Model/Personal.php");
$listo = '';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $rfc = $_POST['rfc'];
    $nss = $_POST['nss'];
    $nombre = $_POST['nombre'];
    $apellidop = $_POST['apellidop'];
    $apellidom = $_POST['apellidom'];
    $puesto = $_POST['puesto'];
    $sueldo = $_POST['sueldo'];
    $horario = $_POST['horario'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $p = new Personal($rfc,$nss,$nombre,$apellidop,$apellidom,$puesto,$sueldo,$horario,$telefono,$direccion);
    $p->AddPersonal();
    $listo .= 'PERSONAL AGREGADO';
}
?>
<main>
    <div class="headSpace">
    </div>
    <section>
        <?php echo $listo?>
        <div class="addpers">
            <form action="<?PHP echo $_SERVER['PHP_SELF']?>" method="POST">
                <input type="text" placeholder="RFC" name="rfc">
                <input type="text" placeholder="NSS" name="nss">
                <input type="text" placeholder="Nombre" name="nombre">
                <input type="text" placeholder="Apellido Paterno" name="apellidop">
                <input type="text" placeholder="Apellido Materno" name="apellidom">
                <input type="text" placeholder="Puesto" name="puesto">
                <input type="text" placeholder="sueldo" name="sueldo">
                <input type="text" placeholder="Horario" name="horario">
                <input type="text" placeholder="Teléfono" name="telefono">
                <input type="text" placeholder="Dirección" name="direccion">
                <input type="submit" value="Registrar">
            </form>
        </div>
    </section>

</main>
