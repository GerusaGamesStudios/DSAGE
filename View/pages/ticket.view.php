<?php 
    $idTicket = 0;
    if($_SERVER['REQUEST_METHOD']=="GET"){
        $idTicket = $_GET['id'];
    }
?>
<main>
    <div class="headSpace">

    </div>
    <h1 style="text-align: center; margin-top:200px; font-family:'Roboto'">COMPRA COMPLETADA SU TICKET ES: <?php echo $idTicket?></h1>
</main>