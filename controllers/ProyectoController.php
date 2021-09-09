<?php

    class ProyectoController
    {
        public function __construct(){
                
            require_once "models/Proyecto.php";
        }
            
        public function index()
        {
            $proyecto= new Proyecto();
            $data ["proyectos"]=$proyecto->listar();
            $data["titulo"]="proyectos";

            // cargar la vista
            require_once "views/proyectos/index.php";
        }
        // mostrar la vista de insercion de registro 

        public function insert()
        {
            $data["titulo"]="crear proyecto";
            require_once "views/proyectos/insert.php";
            
        }

        public function store()
        {
            $nombre=$_POST["nombre"];
            $duracion=$_POST["duracion"];

            $proyecto= new Proyecto();
            $proyecto->insert($nombre,$duracion);
            $this->index();
        }

        public function view($id)
        {
            $proyecto=new Proyecto();
            $data["proyecto"]=$proyecto->getProyecto($id);
            $data["titulo"]="detalle del proyecto";
            require_once "views/proyectos/view.php";
        }
        
        public function edit($id)
        {
            $proyecto=new Proyecto();
            $data["proyecto"]=$proyecto->getProyecto($id);
            $data["titulo"]="editar proyecto";
            require_once "views/proyectos/edit.php";
        }
        public function update()
        {
            $id=$_POST["id"]:
            $duracion=$_POST["duracion"]:
            $nombre=$_POST["nombre"]:

            $proyecto=new Proyecto();
            $proyecto->update($id,$nombre,$duracion);
            $this->index();
        }
    }
?>