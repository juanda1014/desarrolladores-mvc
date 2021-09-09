<?php require "views/shared/header.php"?>

    <h1 class="text-center my-3"><?php echo $data["titulo"]; ?></h1>
    <a href="index.php?controlador=proyecto&accion=insert" class ="btn btn-primary ">Crear royecto</a>
    <table class="table table-hover mb-3">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
               
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data ["proyectos"] as $proyecto) {?>
                <tr>
                    <td><?php echo $proyecto["id"] ?></td>
                    <td><?php echo $proyecto["nombre"] ?></td>
                    
                    <th>
                        <a href="index.php?controlador=proyecto&accion=view&id=<?php echo $proyecto["id"] ?>" class= "btn btn-info">VER</a>
                        <a href="index.php?controlador=proyecto&accion=view&id=<?php echo $proyecto["id"] ?>" class= "btn btn-warning">EDITAR</a>
                        <a href="" class="btn btn-danger">ELIMINAR</a>
                    </th>
                </tr>
                <?php } ?>
        </tbody>
    </table>
<?php require "views/shared/footer.php";?>
