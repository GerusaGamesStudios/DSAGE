<?php
    include (dirname(__DIR__)."/Services/BaseDeDatos.php");
    class Personal{
        private $rfc;
        private $nss;
        private $nombre;
        private $apellidop;
        private $apellidom;
        private $puesto;
        private $sueldo;
        private $horario;
        private $telefono;
        private $direccion;

        function __construct($rfc,$nss,$nombre,$apellidop,$apellidom,$puesto,$sueldo,$horario,$telefono,$direccion)
        {
            $this->rfc = $rfc;
            $this->nfc = $nss;
            $this->nombre = $nombre;
            $this->apellidop = $apellidop;
            $this->apellidom = $apellidom;
            $this->puesto = $puesto;
            $this->sueldo = $sueldo;
            $this->horario = $horario;
            $this->telefono = $telefono;
            $this->direccion = $direccion;
        }

        function get_rfc ()
        {
            return $this->rfc;
        }

        function get_nss ()
        {
            return $this->nss;
        }

        function get_nombre ()
        {
            return $this->nombre;
        }

        function get_apellidop ()
        {
            return $this->apellidop;
        }

        function get_apellidom ()
        {
            return $this->apellidom;
        }

        function get_puesto ()
        {
            return $this->puesto;
        }

        function get_sueldo ()
        {
            return $this->sueldo;
        }

        function get_horario ()
        {
            return $this->horario;
        }

        function get_telefono ()
        {
            return $this->get_telefono;
        }

        function get_direccion ()
        {
            return $this->direccion;
        }

        function set_rfc ($rfc)
        {
            $this->rfc = $rfc;
        }

        
        function set_nss ($nss)
        {
            $this->nss = $nss;
        }

        
        function set_nombre ($nombre)
        {
            $this->nombre = $nombre;
        }
        
        
        function set_apellidop ($apellidop)
        {
            $this->apellidop = $apellidop;
        }

        
        function set_apellidom ($apellidom)
        {
            $this->apellidom = $apellidom;
        }

        
        function set_puesto ($puesto)
        {
            $this->puesto = $puesto;
        }

        
        function set_sueldo ($sueldo)
        {
            $this->sueldo = $sueldo;
        }

        
        function set_horario ($horario)
        {
            $this->horario = $horario;
        }

        
        function set_telefono ($telefono)
        {
            $this->telefono = $telefono;
        }

       
        function set_direccion ($direccion)
        {
            $this->direccion = $direccion;
        } 

        function VisualizarPersonal ()
        {
            echo("RFC: ".$this->get_rfc(). '<br>');
            echo("NSS: ".$this->get_nss(). '<br>');
            echo("Nombre: ".$this->get_nombre(). '<br>');
            echo("ApellidoP: ".$this->get_apellidop(). '<br>');
            echo("ApellidoM: ".$this->get_apellidom(). '<br>');
            echo("Puesto: ".$this->get_puesto(). '<br>');
            echo("Sueldo: ".$this->get_sueldo(). '<br>');
            echo("Horario: ".$this->get_horario());
            echo("Teléfono: ".$this->get_telefono(). '<br>');
            echo("Dirección: ".$this->get_direccion(). '<br>');
        }

        function AddPersonal ()
        {
            $db = new BaseDatos('localhost:3306', 'maya', 'utf8', 'root', '');
            try
            {
                $conexion = $db->getConexion();
                $stat =$conexion->prepare("INSERT INTO personal (RFC, NSS, Nombre, ApellidoP, ApellidoM, Puesto, Sueldo, Horario, Telefono, Direccion)
                 VALUES('$this->rfc', '$this->nss', '$this->nombre', '$this->apellidop', '$this->get_apellidom', '$this->puesto', '$this->sueldo', '$this->horario', '$this->telefono', '$this->direccion');");
                 $stat->execute();
                 $result = $stat->fetchAll();
            } catch (PDOException $e)
            {
                echo $e->getMessage();
            }

            return $result;
        }

        function EliminarPersonal ()
        {
            $db = new BaseDatos('localhost:3306','maya', 'utf8', 'root', '');
            try
            {
                $conexion = $db->getConexion();
                $stat = $conexion->prepare("DELETE FROM personal WHERE RFC = '$this->rfc' ");
                $stat->execute();
                $result = $stat->fetchAll();
            } catch (PDOException $e)
            {
                echo $e->getMessage();
            }
            return $result;
        }

        function BuscarPersonal ($id)
        {
            $db = new BaseDatos('localhost:3306','maya','utf8','root','');
            try
            {
                $conexion = $db->getConexion();
                $stat = $conexion->prepare("SELECT * FROM personal WHERE RFC = '$id'");
                $stat->execute();
                $result = $stat->fetchAll();
            } catch (PDOException $e)
            {
                echo $e->getMessage();
            }
            return $result;
        }

        static function getAllPersonalDB(){
            $db = new BaseDatos('localhost:3306','maya','utf8','root','');
            try
            {
                $conexion = $db->getConexion();
                $stat = $conexion->prepare("SELECT * FROM personal");
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