<?php
    define('Puerto', ':3306');
    class BaseDatos{
        private $pdobject;
        function __construct($host,$dbname,$charset,$user,$password)
        {
            try {
                $this->pdobject = new PDO('mysql:host='.$host.Puerto.';dbname='.$dbname.';charset='.$charset,$user,$password); 
            } catch (PDOException $e) {
                echo "error al abrir base de datos" . $e->getMessage() ;
            }
        }
        function getConexion(){
            return $this->pdobject;
        }
    }
?>