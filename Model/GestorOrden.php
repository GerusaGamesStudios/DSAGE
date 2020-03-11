<?php
    class GestorOrden
    {
        $Orden orden;

        function __construct ()
        {

        }

        function añadir_orden ()
        {
            $completa = FALSE;
            $id;
            $orden = orden();
            $orden_producto Productos = Orden_Producto();

            do{
                echo "Ingresa el ID del producto que deseas añadir \n";
                //lectura del ID
                Productos->AgregarPorID(id);
                echo "¿Deseas añadir otro prodcuto?";
                //lectura de la resp
                
                //Validacion de la orden  
            } while (!completa)
                orden->RealizarOrden(Productos);
                echo "Orden añadida con éxito, tiempo de espera aporximado: \n".$orden.getEspera();
                $orden->VisualizaOrden(Productos);
            
        }

        function Menu ()
        {
            
        }

    }
?>