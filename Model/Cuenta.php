<?php
    include (dirname(__DIR__)."/Services/BaseDeDatos.php");
    class Cuenta{
        private $ID_Empleado;
        private $Cargo;
        private $email;
        private $contra;
        private $rcontra;
        //Constructor's
        function __construct($ID, $Cargo, $email, $password, $rpassword)
        {
            $this->ID_Empleado = $ID;
            $this->Cargo = $Cargo;
            $this->email = $email;
            $this->contra = $password;
            $this->rcontra = $rpassword;
        }
        //Getter's
        function getID_Empleado(){
            return $this->ID_Empleado;
        }

        function getCargo(){
            return $this->Cargo;
        }

        function getEmail(){
            return $this->email;
        }

        function getPassword(){
            return $this->contra;
        }
        //Setter's
        function setID_Empleado($NewID){
            $this->ID_Empleado = $NewID;
        }

        function setCargo($NewCargo){
            $this->Cargo = $NewCargo;
        }

        function setEmail($NewEmail){
            $this->email = $NewEmail;
        }

        function setPassword($NewPassword){
            $this->contra = $NewPassword;
        }

        function VisualizarCuenta(){
            echo "ID Empleado: " . $this->getID_Empleado() . "<br>"; 
            echo "Cargo: " . $this->getCargo() . "<br>";
            echo "Email: " . $this->getEmail() . "<br>";
            echo "Password: " . $this->getPassword() . "<br>";
        }

        function RegistrarCuenta($Datos){ //Recibe arreglo con los datos para crear la cuenta
            $this->ID_Empleado = $Datos[1];
            $db = new BaseDatos('localhost','maya','utf8','root','');
            $con = $db->getConexion();
            $stat = $con->prepare("SELECT * FROM personal WHERE ID_Empleado = '$this->ID_Empleado' ");
            $stat->execute();
            $query = $stat->fetchAll();
            if( count($query) != 0){
                return null;
            }else{
                $this->email = $Datos[0];
                $this->password = $Datos[2];
                $cuenta = new Cuenta( $this->getID_Empleado(), $Datos[3], $this->getEmail(), $this->getPassword(), $this->getPassword() );
                $cuenta->AñadirCuenta();
                return $cuenta;
            }
        }

        function AñadirCuenta(){
            try{
                $db = new BaseDatos('localhost','maya','utf8','root','');
                $con = $db->getConexion();
                $stat = $con->prepare( "INSERT INTO cuentas (ID_Empleado,Cargo,Email,Contra) VALUES ( '$this->ID_Empleado','$this->Cargo','$this->email','$this->contra' );" ); 
                $stat->execute();
            }catch (PDOException $e)
            {
                echo $e->getMessage();
            }
        }

        function EliminarCuenta(){
            try{
                $db = new BaseDatos('localhost','maya','utf8','root','');
                $con = $db->getConexion();
                $stat = $con->prepare("DELETE FROM cuentas WHERE ID_Empleado = '$this->ID_Empleado' ");
                $stat->execute();
            }catch (PDOException $e)
            {
                echo $e->getMessage();
            }
        }
        static function BuscarCuenta ($id)
        {
            $db = new BaseDatos('localhost','maya','utf8','root','');
            try
            {
                $conexion = $db->getConexion();
                $stat = $conexion->prepare("SELECT * FROM cuentas WHERE RFC = '$id'");
                $stat->execute();
                $result = $stat->fetchAll();
            } catch (PDOException $e)
            {
                echo $e->getMessage();
            }
            return $result;
        }
    }
?>