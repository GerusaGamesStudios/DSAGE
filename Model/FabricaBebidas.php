<?php
    require 'Model/Bebida.php';
    class FabricaBebidas implements FabricaAbstractaProducto{
        public function crearBebida(): Bebida
        {
            return new Bebida;
        }
    }
?>