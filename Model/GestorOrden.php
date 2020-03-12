<?php
    class GestorOrden
    {
        private $ArrayOrdenes = array();
        function __construct()
        {
            
        }
        function getOrdenes(){
            return $this->ArrayOrdenes;
        }
    }
?>