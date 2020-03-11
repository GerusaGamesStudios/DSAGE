<?php
    require 'Model/Producto.php';
    class Orden{
        private $productos = array();
        private $NumProductos;
        private $TiempoEspera;
        function __construct($productosJS)
        {
            $this->NumProductos = 0;
            foreach($productosJS as $producto){
                $result = Producto::BuscarProducto($producto);
                $newprod = new Producto($result["idProducto"] , $result["NOMBRE"] , $result["PRECIO"] , $result["DESCRIPCION"], $result["TIPO"] , $result["TIPO"]);
                array_push($this->productos, );
                $this->NumProductos++;
                $this->TiempoEspera += $newprod->get_Preparacion();
            }
        }

        function getOrden(){
            
        }
    }
?>