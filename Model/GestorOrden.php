<?php
    class GestorOrden
    {
        private $ArrayOrdenes = array();
        function __construct()
        {
<<<<<<< HEAD
            
=======
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
                    array_push($IDs,$producto["idPRODUCTO"]);
                }
                $orden = new Orden($IDs,$reg["mesa"]);
                array_push($this->ArrayOrdenes, $orden);
            }
>>>>>>> 043ad5a4ada628b8dcc41665deb1e55d5ef31add
        }
        function getOrdenes(){
            return $this->ArrayOrdenes;
        }
    }
?>