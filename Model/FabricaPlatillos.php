<?php
    require 'Model/Platillo.php';
    class FabricaPlatillos implements FabricaAbstractaProducto{
        public function crearPlatillo(): Platillo
        {
            return new Platillo;
        }
    }
?>