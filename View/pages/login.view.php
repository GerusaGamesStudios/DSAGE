<?php
    include (dirname(__DIR__)."../../Model/Menu.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $usuario = $_POST['user'];
        $contraseña = $_POST['contra'];


        }
?>

<main>
    <div class="headSpace">

    </div>
    <section>
        <div class="loginReg">
            <form action="">
                <input type="text" placeholder="IDUsuario">
                <input type="text" name="" id="" placeholder="Contraseña">
                <input type="submit" value="verificar">
            </form>
            
        </div>
    </section>
</main>