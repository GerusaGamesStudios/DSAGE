<?php
    class Eliminar implements iCommand
    {
        protected $producto;

        public function __construct(Producto $producto)
        {
            $this->producto = $producto;
        }
        public function execute()
        {
            $this->producto->EliminarProducto();
        }
    }
?>