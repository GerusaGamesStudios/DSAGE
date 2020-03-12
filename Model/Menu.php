<?php
    include (dirname(__DIR__)."/Services/BaseDeDatos.php");
    class Menu{
        private $db;
        function __construct()
        {
            $this->db = new BaseDatos('localhost','maya','utf8','root','');
            echo "base de datos abierta \n";
        }
        function getAllProductosBd(){
            try {
                $conexion  = $this->db->getConexion();
                $stat = $conexion->prepare('SELECT * FROM productos');
                $stat->execute();
                $result = $stat->fetchAll();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            return $result;
        }
    }
?>