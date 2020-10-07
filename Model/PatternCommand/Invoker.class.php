<?php
    class Invoker{
        protected $Insertar;
        protected $Eliminar;
        protected $Modificar;

        public function __construct(Insertar $add, Eliminar $delete, Modificar $update)
        {
            echo 'Iniciando invoker <br>';
            $this->Insertar = $add;
            $this->Eliminar = $delete;
            $this->Modificar = $update;
        }

        public function iInsertar(){
            $this->Insertar->execute();
        }
        public function iEliminar(){
            $this->Eliminar->execute();
        }
        public function iModificar(){
            $this->Modificar->execute();
        }
    }
?>