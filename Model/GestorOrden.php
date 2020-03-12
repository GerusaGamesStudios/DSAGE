<?php
    include (dirname(__DIR__)."/Services/BaseDeDatos.php");

    class GestorOrden
    {
        private $ArrayOrdenes = array();
        function __construct()
        {
            $db = new BaseDatos('localhost','maya','utf8','root','');
            try {
                $conexion  = $db->getConexion();
                $stat = $conexion->prepare('SELECT * FROM ordenes');
                $stat->execute();
                $result = $stat->fetchAll();
                foreach ($result as $res) {
                   $id = $res['ID_Orden'];
                }
                
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
        }
        function getOrdenes(){
            return $this->ArrayOrdenes;
        }
    }
?>