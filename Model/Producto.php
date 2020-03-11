<?php
include (dirname(__DIR__)."/Services/BaseDeDatos.php");
    class Producto{
        private $ID_Producto;
        private $NombreProducto;
        private $Precio;
        private $Descripción;
        private $preparacion;
        private $tipo;

        //Constructor's
        function __construct($ID_Producto, $NombreProducto, $Precio,  $Descripción, $newpreparacion, $tipo) {
            $this->ID_Producto = $ID_Producto;
            $this->NombreProducto = $NombreProducto;
            $this->Precio = $Precio;
            $this->Descripción = $Descripción;
            $this->preparacion = $newpreparacion;
            $this->tipo = $tipo;
        }
        function getID_Producto() {
            return $this->ID_Producto;
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
    
        function setID_Producto($ID_Producto) {
            $this->ID_Producto = $ID_Producto;
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
            $db = new BaseDatos('localhost:3306','maya','utf8','root','');
            try {
                $conexion  = $db->getConexion();
                $stat = $conexion->prepare("INSERT INTO productos (idProducto,NOMBRE, PRECIO, DESCRIPCION, PREPARACION, TIPO) VALUES('$this->ID_Producto','$this->NombreProducto','$this->Precio','$this->Descripción','$this->preparacion','$this->tipo');");
                $stat->execute();
                $result = $stat->fetchAll();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            return $result;
        }

        function EliminarProducto(){
            $db = new BaseDatos('localhost:3306','maya','utf8','root','');
            try {
                $conexion  = $db->getConexion();
                $stat = $conexion->prepare("DELETE FROM productos WHERE idProducto = '$this->ID_Producto' ");
                $stat->execute();
                $result = $stat->fetchAll();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            return $result;
        }
    }   
?>