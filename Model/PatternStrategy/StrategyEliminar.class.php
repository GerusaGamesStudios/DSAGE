<?php
    class StrategyEliminar implements iStrategy{
        protected $Invocador;

        public function ejecutar(Invoker $inv){
            $this->Invocador = $inv;
            $this->Invocador->iEliminar();
        }
    }
?>