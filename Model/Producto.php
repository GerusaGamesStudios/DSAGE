<?php
    require_once (dirname(__DIR__)."/Services/BaseDeDatos.php");

    class Producto{
        private $idProducto;
        private $NombreProducto;
        private $Precio;
        private $Descripción;
        private $preparacion;
        private $tipo;

        //Constructor's
        function __construct($idProducto,$NombreProducto, $Precio,  $Descripción, $newpreparacion, $tipo) {
            echo 'Iniciando producto <br>';
            $this->idProducto = $idProducto;
            $this->NombreProducto = $NombreProducto;
            $this->Precio = $Precio;
            $this->Descripción = $Descripción;
            $this->preparacion = $newpreparacion;
            $this->tipo = $tipo;
        }
        function getID_Producto() {
            return $this->idProducto;
        }
    
        function getNombreProducto() {
            return $this->NombreProducto;
        }
    
        function getPrecio() {
            return $this->Precio;
        }
    
        function getDescripción() {
            return $this->Descripción;
        }
        function get_Preparacion(){
            return $this->preparacion;
        }

        function get_Tipo(){
            return $this->tipo;
        }
    
        function setNombreProducto($NombreProducto) {
            $this->NombreProducto = $NombreProducto;
        }
    
        function setPrecio($Precio) {
            $this->Precio = $Precio;
        }
    
        function setDescripción($Descripción) {
            $this->Descripción = $Descripción;
        }
        function setPreparacion($NewPrep) {
            $this->preparacion = $NewPrep;
        }
        function setTipo($newtype) {
            $this->tipo = $newtype;
        }
        function VisualizarProducto(){
            echo("Id producto " . $this->getID_Producto() . '<br>');
            echo("Nombre Producto " . $this->getNombreProducto(). '<br>');
            echo("Precio " . $this->getPrecio() . '<br>');
            echo("Descripcion " . $this->getDescripción() . '<br>');
            echo("Preparación " . $this->get_Preparacion(). '<br>' );
            echo("Tipo " . $this->get_Tipo() . '<br>');
        }
        function AddProducto(){
            $db = new BaseDatos('localhost','maya','utf8','root','');
            try {
                $conexion  = $db->getConexion();
                $stat = $conexion->prepare("INSERT INTO productos (NOMBRE, PRECIO, DESCRIPCION, PREPARACION, TIPO)
                                            VALUES('$this->NombreProducto','$this->Precio','$this->Descripción',
                                            '$this->preparacion','$this->tipo');");
                $stat->execute();
                $result = $stat->fetchAll();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            return $result;
        }

        function EliminarProducto(){
            $db = new BaseDatos('localhost','maya','utf8','root','');
            try {
                $conexion  = $db->getConexion();
                $stat = $conexion->prepare("DELETE FROM productos WHERE idPRODUCTO = '$this->idProducto' ");
                $stat->execute();
                $result = $stat->fetchAll();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            return $result;
        }

        function ModificarProducto(){
            $db = new BaseDatos('localhost','maya','utf8','root','');
            try {
                $conexion  = $db->getConexion();
                $stat = $conexion->prepare("UPDATE productos SET NOMBRE='$this->NombreProducto',
                                            PRECIO='$this->Precio',
                                            DESCRIPCION='$this->Descripción',
                                            PREPARACION='$this->preparacion',
                                            TIPO='$this->tipo'
                                            WHERE idPRODUCTO = '$this->idProducto' ");
                $stat->execute();
                $result = $stat->fetchAll();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            return $result;
        }

        static function BuscarProducto($codigo){
            //$db = new BaseDatos('localhost','maya','utf8','root','');
            $mysqli = new mysqli("localhost", "root", "", "maya");
            try {
                //$conexion  = $db->getConexion();
                /*$stat = $conexion->prepare("SELECT * FROM productos WHERE idPRODUCTO = '$codigo' ");
                $stat->execute();*/
                $result = $mysqli->query("SELECT * FROM productos WHERE idPRODUCTO = '$codigo' ");
                //$result = $stat->fetchAll();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            return $result;
        }

        static function getAllProductos(){
            $db = new BaseDatos('localhost','maya','utf8','root','');
            try {
                $conexion  = $db->getConexion();
                $stat = $conexion->prepare("SELECT * FROM productos ");
                $stat->execute();
                $result = $stat->fetchAll();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            return $result;
        }
    }  

    /*if($_SERVER['REQUEST_METHOD'] == "GET"){
        $idProducto = $_GET['id'];
        $producto = Producto::BuscarProducto($idProducto);
        echo json_encode($producto);
    }*/
?>