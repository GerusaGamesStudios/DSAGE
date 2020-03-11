<?php
    class GestorOrden
    {
        private $ArrayOrdenes = array();
        function __construct()
        {
            try {
                $conexion  = $this->db->getConexion();
                $stat = $conexion->prepare('SELECT * FROM ordenes');
                $stat->execute();
                $result = $stat->fetchAll();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            //Pasando cada registro al array de ordenes
            while ($reg=mysqli_fetch_array($result))
            {
              array_push($this->ArrayOrdenes, $reg);
            }
        }

        function getOrdenes(){
            return $this->ArrayOrdenes;
        }
    }
?>