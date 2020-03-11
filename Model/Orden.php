<?php
    class Orden{
        private $productos = array();
        private $NumProductos;
        function __construct()
        {

        }
        function productoAOrden ($producto)
        {
            array_push($this->productos,$producto);
            $this->NumProductos = $this->NumProductos + 1;
        }
    }
?>