<?php
    class Cuenta{
        private $ID_Empleado;
        private $Cargo;
        private $email;
        private $password;
        private $rpassword;
        //Constructor's
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
            echo("ID Empleado: " . $this->getID_Empleado() );
            echo("Cargo: " . $this->getCargo() );
            echo("Email: " . $this->getEmail() );
            echo("Password: " . $this->getPassword() );
        }
    }
?>