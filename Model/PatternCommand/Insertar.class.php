<?php
    require_once ("iCommand.class.php");
    class Insertar implements iCommand
    {
        protected $producto;

        public function __construct(Producto $producto)
        {
            $this->producto = $producto;
        }
        public function execute()
        {
            $this->producto->AddProducto();
        }
    }
?>