<?php
include (dirname(__DIR__)."../../Model/Autenticacion.php");
    $a = '';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $usuario = $_POST['user'];
        $contraseña = $_POST['contra'];
        $auth = new Autenticacion();
        $a =  $auth->iniciarSesion($usuario,$contraseña);
    }
?>

<main>
    <div class="headSpace">

    </div>
    <section>
        <?php echo $a?>
        <div class="loginReg">
            <form action="<?PHP ECHO $_SERVER['PHP_SELF']?>" method="POST">
                <input type="text" placeholder="IDUsuario">
                <input type="password" name="" id="" placeholder="Contraseña">
                <input type="submit" value="verificar">
            </form>
            
        </div>
    </section>
</main>

<script src="../../Controller/jquery.js"></script>
<script src="../../Controller/loginController.js"></script>