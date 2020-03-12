<?php
    class FabricaConcretaComprobanteRestaurante implements FabricaAbstractaComprobantes{
        public function creaComprobanteRestaurante($numero_de_mesa, $mesero, $orden): ComprobanteRestaurante{
            return new ComprobanteRestaurante($numero_de_mesa, $mesero, $orden);
        }
    }
?>  