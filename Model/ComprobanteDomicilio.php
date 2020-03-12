<?php
    class ComprobanteDomicilio extends Comprobante{
        public function __construct ($direccion, $nombreCliente, $orden)
        {
            parent ::__construct($orden);
            $this->direccion = $direccion;
            $this->nombreCliente = $nombreCliente;
        }

        function getDireccion()
        {
            return $this->direccion;
        }

        function getNombreCliente()
        {
            return $this->nombreCliente;
        }

        function setNumeroDeMesa ($newDir)
        {
            $this->direccion = $newDir;
        }

        function setMesero($newCliente)
        {
            $this->nombreCliente = $newCliente;
        }
    }  
?>