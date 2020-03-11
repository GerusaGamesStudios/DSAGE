<?php
    require 'Model/Producto.php';
    class Orden{
        private $productos = array();
        private $TiempoEspera;
        private $mesa;
        function __construct($productosJS, $mesa)
        {
            foreach($productosJS as $producto){
                $result = Producto::BuscarProducto($producto);
                $newprod = new Producto($result["idProducto"] , $result["NOMBRE"] , $result["PRECIO"] , $result["DESCRIPCION"], $result["TIPO"] , $result["TIPO"]);
                array_push($this->productos, $newprod);
                $this->TiempoEspera += $newprod->get_Preparacion();
                $this->mesa = $mesa;
            }
        }

        function AddOrdenDB(){
            $db = new BaseDatos('localhost:3306','maya','utf8','root','');
            $con = $db->getConexion();
            $stat = $con->prepare( "INSERT INTO ordenes (ID_Orden, TiempoEspera, Mesa) VALUES (null ,'$this->TiempoEspera','$this->mesa');" ); 
            $stat->execute();
            $idOrden = intval($con->lastInsertId());
            foreach($this->productos as $producto){
                $idProd = $producto["idProducto"];
                $stat1 = $con->prepare( "INSERT INTO ProductoOrden (ID_Orden, ID_Producto) VALUES ( '$idOrden','$idProd');" ); 
                $stat1->execute();
            }
        }
        function getOrden(){
            return $this->productos;
        }
        function getTiempoEspera(){
            return $this->TiempoEspera;
        }
    }
?>