<?php require "views/shared/header.php"?>
<div class="container">
    <h1 class="text-center"><?=$data["titulo"]?></h1>
    <form action="index.php?controlador=proyecto&accion=store" method="POST">
        <div class=mb-3>
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre">
            <div id="emailHelp" class="form-text">Debe digitar el nombre del proyecto</div>
        </div>
        <div class=mb-3>
            <label for="exampleInputEmail1" class="form-label">Duracion</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="duracion">
            <div id="emailHelp" class="form-text">Debe digitar la duracion del</div>
        </div>
        <button type="submit" class="btn btn-primary" >Guardar</button>
    </form>
</div>

<?php require "views/shared/footer.php"?>