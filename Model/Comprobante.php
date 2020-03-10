<?php
    class Comprobante{

        private  $orden;
        private $subtotal;
        private $PrecioTotal;
        private $FechaHora;

        function __construct (){}

        function Comprobante ($orden, $subtotal, $PrecioTotal, $FechaHora )
        {
            $this->orden = $orden;
            $this->subtotal = $subtotal;
            $this->PrecioTotal = $PrecioTotal;
            $this->FechaHora = $FechaHora;
        }

        function getOrden ()
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

        function setOrden ($neworden)
        {
            $this->orden = $neworden;
        }

        function setSubtotal($newsub)
        {
            $this->subtotal = $newsub;
        }

        function setPrecioTotal ($newprice)
        {
            $this->PrecioTotal = $newprice;
        }

        function setFechaHora ($newfecha)
        {
            $this->FechaHora = $newfecha;
        }

        function GenerarComprobante ()
        {

        }
    }
?>