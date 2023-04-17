<?php 
require "../Controller/CineController.php"; 
$valor = null;
$datos = CineController::controller_cine($valor);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="py-3">
   
    <!-- Begin Code -->
    <main class="container">
        <div class="row">
            <div class="col">
                <h4>Peliculas</h4>
            </div>
        </div>

        <div class="row py-3">
            <div class="col">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Valoracion</th>
                            <th>Imagen</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>

                    <!-- <tbody> -->
                        <?php
                        foreach($datos as $dato)
                        {                                  
                            echo
                            "<tr>
                                <td>$dato[id]</td>
                                <td>$dato[Nombre]</td>
                                <td>$dato[Descripcion]</td>
                                <td>$dato[Valoracion]</td>
                                <td>$dato[Imagen]</td>
                                <td><a class='btn btn-success' href='Cine_edit.php?idEdit=$dato[id]'>Edit</td>
                                <td><a class='btn btn-danger' href='?idDelete=$dato[id]'>Delete</td>
                            </tr>";
                        }

                        $delete = new CineController();
                        $delete->controller_delete_movie();
                        ?>
                    <!-- </tbody> -->


                </table>
                <a href="Cine_new.php" class="btn btn-primary float-right">Nuevo</a>
            </div>
        </div>
        
    </main>




</body>
</html>