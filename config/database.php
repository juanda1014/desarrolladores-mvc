<?php
    class conexion
    {
       public static function  conectar()
       {
           $server="127.0.0.1";
           $username="root";
           $password="";
           $database="empresa";

           $conn=mysqli_connect($server,$username,$password,$database);

           if (!$conn) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            exit;

           }
           
        //    echo "conectado";para mirar si estamos conectados
           return $conn;
       }    

      
    }


?>