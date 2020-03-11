<?php
    class GestorOrden
    {
        private $orden = new Orden();
        function __construct (){}

        function producto2Orden ($producto)
        {
            array_push($this->orden->productos,$producto);
            $this->orden->NumProductos = $this->orden->NumProductos + 1;
        }
    }
?>