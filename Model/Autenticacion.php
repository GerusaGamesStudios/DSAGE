<?php
    session_start();
    include_once (dirname(__DIR__)."/Services/BaseDeDatos.php");
    class Autenticacion{
        //Constructor
        private  $db;
        function __construct(){
            $db = new BaseDatos('localhost','maya','utf8','root','');
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
                $stat = $conexion->prepare('SELECT * FROM cuentas WHERE ID_Empleado = :id AND Contra = :ps LIMIT 1');
                $stat->execute(array('id'=>$usuario,'ps'=>$contraseña));
                $result = $stat->fetchAll();
                if($result){
                    var_dump($result);
                }
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
?>