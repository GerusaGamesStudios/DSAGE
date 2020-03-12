<?php
    class ComprobanteRestaurante extends Comprobante{
        private $numero_de_mesa;
        private $mesero;
    
    public function __construct ($numero_de_mesa, $mesero, $orden)
        {
            parent ::__construct($orden);
            $this->numero_de_mesa = $numero_de_mesa;
            $this->mesero = $mesero;
        }

        function getNumeroDeMesa()
        {
            return $this->numero_de_mesa;
        }

        function getMesero()
        {
            return $this->mesero;
        }

        function setNumeroDeMesa ($newMesa)
        {
            $this->numero_de_mesa = $newMesa;
        }

        function setMesero($newMesero)
        {
            $this->mesero = $newMesero;
        }
    }  

?>