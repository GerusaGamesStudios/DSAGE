<?php
    class Cliente{
        protected $producto;
        protected $invoker;
        protected $insertar;
        protected $eliminar;
        protected $modificar;
        protected $iStrategy;

        public function __construct(Producto $prod){
            echo 'Iniciando cliente <br>';
            $this->producto = $prod;
            $this->insertar = new Insertar($this->producto);
            $this->eliminar = new Eliminar($this->producto);
            $this->modificar = new Modificar($this->producto);
            $this->invoker = new Invoker($this->insertar,$this->eliminar,$this->modificar);
        }

        public function setStrategy(iStrategy $estrategia){
            $this->iStrategy = $estrategia;
            $this->iStrategy->ejecutar($this->invoker);
        }
    }
?>
