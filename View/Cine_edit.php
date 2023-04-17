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
                <h4>Editar Peliculas</h4>
            </div>
        </div>

       
        <div class="row py-3">
            <div class="col">
             <form class = 'row g-3' method="POST" autocomplete='off'>


                <div class="col-md-12">
                    <input type="hidden" name="idEdit" id="idEdit" value="<?php print($datos['id']);?>">
                </div>

                <div class="col-md-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <Input type="text" id="nuevo_nombre" name="nuevo_nombre" class="form-control" required value="<?php print($datos['Nombre']);?>">
                </div>

                <div class="col-md-6">
                    <label for="Descripcion" class="form-label">Descripción</label>
                    <Input type="text" id="Descripcion" name="Descripcion" class="form-control" required value="<?php print($datos['Descripcion']);?>">
                </div>

                <div class="col-md-3">
                    <label for="Valoracion" class="form-label">Valoración</label>
                    <Input type="range" min = "1" max= "10" id="Valoracion" name="Valoracion" class="form-control" required value="<?php print($datos['Valoracion']);?>">
                </div>

                <div class="row py-3">
                    <label for="Imagen" class="form-label">Imagen</label>
                    <Input type="file" id="Imagen" name="Imagen" class="form-control" value="<?php print($datos['Imagen']);?>">
                </div>

                <div class="col-md-12">
                    <a href="Cine_read.php" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>


                <?php
                $Cine = new CineController();
                $Cine->controller_edit_movie();
                ?>

             </form>
            </div>
        </div>
        
    </main>




</body>
</html>