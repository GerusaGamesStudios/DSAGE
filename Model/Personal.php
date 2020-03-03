<?php
    class Personal{
        private $rfc;
        private $nfc;
        private $nombre;
        private $apellidop;
        private $apellidom;
        private $puesto;
        private $sueldo;
        private $horario;
        private $telefono;
        private $direccion;

        function __construct($rfc,$nfc,$nombre,$apellidop,$apellidom,$puesto,$sueldo,$horario,$telefono,$direccion)
        {
            $this->rfc = $rfc;
            $this->nfc = $nfc;
            $this->nombre = $nombre;
            $this->apellidop = $apellidop;
            $this->apellidom = $apellidom;
            $this->puesto = $puesto;
            $this->sueldo = $sueldo;
            $this->horario = $horario;
            $this->telefono = $telefono;
            $this->direccion = $direccion;
        }

        
    }      
?>