<?php
    class Autenticacion{
        //Constructor
        function __construct(){}   

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
    }
?>