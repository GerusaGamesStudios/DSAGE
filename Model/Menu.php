<?php
    include "../Services/BaseDeDatos.php";
    class Menu{
        private $db;
        function __construct()
        {
            $db = new BaseDatos('localhost:3307','maya','utf-8','root','');
            
        }
        function getAllProductosBd(){
            $conexion  = $this->db->getConexion();
            $stat = $conexion->prepare('SELECT * FROM cuentas');
            $stat->execute();
            $result = $stat->fetchAll();
            return $result;
        }
    }
?>