<?php
    class Comprobante{

        private $orden;
        private $subtotal;
        private $PrecioTotal;
        private $FechaHora;

        function __construct ($norden)
        {
            $this->orden = $norden;
            date_default_timezone_set('America/Mexico_City'); //configuro un nuevo timezone
            $this->FechaHora = 'Fecha/hora actual: '. date('Y-m-d h:i:s', time());;
            echo($this->FechaHora);
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