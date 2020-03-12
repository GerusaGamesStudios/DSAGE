<?php
    class BaseDatos{
        private $pdobject;
        function __construct($host,$dbname,$charset,$user,$password)
        {
            $puerto = ':3306';

            try {
                $this->pdobject = new PDO('mysql:host='.$host. $puerto .';dbname='.$dbname.';charset='.$charset,$user,$password); 
            } catch (PDOException $e) {
                echo "error al abrir base de datos" . $e->getMessage() ;
            }
        }
        function getConexion(){
            return $this->pdobject;
        }
    }
?>