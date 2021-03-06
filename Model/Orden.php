<?php
    include_once (dirname(__DIR__)."/Model/Producto.php");
    include_once (dirname(__DIR__)."/Model/GestorOrden.php");
    include_once (dirname(__DIR__)."/Services/BaseDeDatos.php");

    class Orden{
        private $productos = array();
        private $ID_Orden;
        private $TiempoEspera;
        private $mesa;
        function __construct($productosJS, $mesa)
        {
            foreach($productosJS as $producto){
                $result = Producto::BuscarProducto($producto);
                $result = $result[0];
                $newprod = new Producto($result["idPRODUCTO"] , $result["NOMBRE"] , $result["PRECIO"] , $result["DESCRIPCION"], $result["TIPO"] , $result["TIPO"]);
                array_push($this->productos, $newprod);
                $this->TiempoEspera += intval($newprod->get_Preparacion());
                $this->mesa = $mesa;
            }
        }

        function AddOrdenDB(){
            $db = new BaseDatos('localhost','maya','utf8','root','');
            $con = $db->getConexion();
            $stat = $con->prepare( "INSERT INTO ordenes (ID_Orden, TiempoEspera, Mesa) VALUES (null ,'$this->TiempoEspera','$this->mesa');" ); 
            $stat->execute();
            $idOrden = intval($con->lastInsertId());
            $this->ID_Orden = $idOrden;
            foreach($this->productos as $producto){
                $idProd = $producto->getID_Producto();
                $stat1 = $con->prepare( "INSERT INTO ProductoOrden (ID_Orden, ID_Producto) VALUES ( '$idOrden','$idProd');" ); 
                $stat1->execute();
            }
        }

        function ObtenerProductosOrden($codigo){
            $db = new BaseDatos('localhost','maya','utf8','root','');
            try {
                $conexion  = $db->getConexion();
                $stat = $conexion->prepare("SELECT * FROM productoorden WHERE ID_Orden = '$codigo' ");
                $stat->execute();
                $result = $stat->fetchAll();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            return $result;
        }
        
        function getOrden(){
            return $this->productos;
        }
        function getID_Orden(){
            return $this->ID_Orden;
        }
        function getTiempoEspera(){
            return $this->TiempoEspera;
        }
        function getMesa(){
            return $this->mesa;
        }
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $prods = $_POST['productos'];
        $numMesa = $_POST['numesa'];
        $nuevaOrden = new Orden($prods,$numMesa);
        $nuevaOrden->AddOrdenDB();
        echo $nuevaOrden->getID_Orden();
    }
?>