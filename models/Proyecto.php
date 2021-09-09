<?php
    class Proyecto
    {
         private$db;
         private $proyectos;

         public function __construct()
        {
             $this->db= Conexion ::conectar();
             $this->proyectos=array();
             
        }
        //  listar todos los campos de la tabla proyecto
        public function listar()
        {
            $sql="SELECT*FROM proyecto";
            $resultado=$this->db->query($sql);
            // para probar la conexio
            if (!$resultado) {
                echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                exit;
    
            }
            // si todo esta bien 
            while($row = $resultado->fetch_assoc() )
            {
                $this->proyectos[]=$row;
            }

            return $this->proyectos;
        }
        public function insert($nombre,$duracion)
        {
            $sql=" INSERT INTO proyecto(nombre,duracion)
                    VALUES ('$nombre','$duracion')";

            $this->db->query($sql);

                    

        }
        // obtener la informacion de un  proyecto
        public function getProyecto()
        {
            $sql="SELECT*FROM proyecto WHERE id =$id";
            $resultado=$this->db->query($sql);
            $row=$resultado->fetch_assoc();
            return $row;
        }
        public function update($id,$nombre,$duracion)
        {
            $sql="UPDATE proyecto SET nombre='$nombre',duracion='$duracion' WHERE id=$id";

            $this->db->query($sql);
        }
    }
    
?>