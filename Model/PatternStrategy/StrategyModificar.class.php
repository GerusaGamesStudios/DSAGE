<?php
    class StrategyModificar implements iStrategy{
        protected $Invocador;

        public function ejecutar(Invoker $inv){
            $this->Invocador = $inv;
            $this->Invocador->iModificar();
        }
    }
?>