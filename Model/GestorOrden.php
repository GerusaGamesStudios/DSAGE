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
            $vec = [];
            while ($reg=mysqli_fetch_array($result))
            {
                $vec[] = $reg;
                $IDs = array();
                foreach($vec as $producto){
                    array_push($IDs,$producto["idProducto"]);
                }
                $orden = new Orden($IDs,$reg["mesa"]);
                array_push($this->ArrayOrdenes, $orden);
            }
        }
        function getOrdenes(){
            return $this->ArrayOrdenes;
        }
    }
?>