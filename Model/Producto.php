<?php
    class Producto{
        private $ID_Producto;
        private $NombreProducto;
        private $Precio;
        private $Descripción;
        private $preparacion;
        //Constructor's
        function __construct($ID_Producto, $NombreProducto, $Precio,  $Descripción) {
            $this->ID_Producto = $ID_Producto;
            $this->NombreProducto = $NombreProducto;
            $this->Precio = $Precio;
            $this->Descripción = $Descripción;
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
    
        function setID_Producto($ID_Producto) {
            $this->ID_Producto = $ID_Producto;
        }
    
        function setNombreProducto($NombreProducto) {
            $this->NombreProducto = $NombreProducto;
        }
    
        function setPrecio($Precio) {
            $this->Precio = $Precio;
        }
    
        function setDescripción( $Descripción) {
            $this->Descripción = $Descripción;
        }
        function VisualizarCuenta(){
            echo("Id producto " . $this->getID_Producto());
            echo("Nombre Producto " . $this->getNombreProducto());
            echo("Precio " . $this->getPrecio());
            echo("Preparación " . $this->get_Preparacion());
        }
    }   
?>