<?php
    class FabricaConcretaComprobanteDomicilio implements FabricaAbstractaComprobantes{
        public function creaComprobanteDomicilio($direccion, $nombreCliente, $orden): ComprobanteDomicilio{
            return new ComprobanteDomicilio($direccion, $nombreCliente, $orden);
        }
    }
?>  