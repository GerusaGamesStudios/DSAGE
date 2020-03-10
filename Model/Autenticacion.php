<?php
    include (dirname(__DIR__)."/Services/BaseDeDatos.php");
    class Autenticacion{
        //Constructor
        private  $db;
        function __construct(){
            $db = new BaseDatos('localhost:3306','maya','utf8','root','');
        }   

        function getAllCuentasBd(){
            try {
                $conexion  = $this->db->getConexion();
                $stat = $conexion->prepare('SELECT * FROM cuentas');
                $stat->execute();
                $result = $stat->fetchAll();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            return $result;
        }

        function iniciarSesion($usuario,$contraseña){
            try {
                $conexion = $this->db->getConexion();
            } catch (PDOStatement $e) {
                echo $e->getMessage();
            }
        }
    }
?>