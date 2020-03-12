<?php
    interface FabricaAbstractaComprobantes{
        public function creaComprobanteDomicilio($dato1,$dato2,$orden): ComprobanteDomicilio;
        public function crearComrpobanteRestaurante($dato1,$dato2,$orden): ComrpobanteRestaurante;
    }
?>

