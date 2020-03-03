<?php
    class Comprobante{

        private $Orden orden;
        private $subtotal;
        private $PrecioTotal;
        private $FechaHora;

        function __construct ()
        {

        }

        function Comprobante (Orden orden, subtotal, PrecioTotal, FechaHora )
        {
            $this->orden = $orden;
            $this->subtotal = $subtotal;
            $this->PrecioTotal = $PrecioTotal;
            $this->FechaHora = $FechaHora;
        }

        function Orden getOrden ()
        {
            return $this->orden;
        }

        function getSubtotal ()
        {
            return $this->subtotal;
        }

        function getPrecioTotal()
        {
            return $this->PrecioTotal;
        }

        function getFechaHora ()
        {
            return $this->FechaHora;
        }

        function setOrden ()
        {
            $this->orden = $orden;
        }

        function setSubtotal()
        {
            $this->subtotal = $subtotal;
        }

        function setPrecioTotal ()
        {
            $this->PrecioTotal = $PrecioTotal;
        }

        function setFechaHora ()
        {
            $this->FechaHora = $FechaHora;
        }

        function GenerarComprobante ()
        {

        }
    }
?>