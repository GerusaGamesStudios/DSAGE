<?php

    require "../Servicios/BaseDeDatos.php";
    class Cuenta{
        private $ID_Empleado;
        private $Cargo;
        private $email;
        private $password;
        private $rpassword;
        //Constructor
        function __construct($ID, $Cargo, $email, $password, $rpassword)
        {
            $this->ID_Empleado = $ID;
            $this->Cargo = $Cargo;
            $this->email = $email;
            $this->password = $password;
            $this->rpassword = $rpassword;
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
            return $this->password;
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
            $this->password = $NewPassword;
        }

        function VisualizarCuenta(){
            echo("ID Empleado: " . $this->getID_Empleado() ) "<br>"; 
            echo("Cargo: " . $this->getCargo() ) "<br>";
            echo("Email: " . $this->getEmail() ) "<br>";
            echo("Password: " . $this->getPassword() ) "<br>";
        }

        function RegistrarCuenta($Datos){
            $cuenta = new Cuenta();
            $this->ID_Empleado = $DatoS[1];
            $db = new BaseDeDatos();
            $con = db->getConexion();
            $stat = con->prepare('SELECT * FROM Personal WHERE ID_Empleado = $ID_Empleado');
            $stat->execute();
            $query = $stat->fecthAll();
            if( count($query) != 0){
                return null;
            }else{
                $this->email = $Datos[0];
                $this->password = $Datos[2];
                $this->
                $cuenta = new Cuenta($this->getID_Empleado(), cuenta[0], $this->getEmail(), $this->getPassword());
                $stat = con->prepare('INSERT INTO Personal ($this->getID_Empleado(), $this->getCargo() ) VALUES ('','');');
                $stat->execute();
                return $cuenta;
            }
        }
    }
?>