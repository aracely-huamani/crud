<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD DEMO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <br>
        <center >
        <h1>Listado de productos</h1>
        </center>
        <br>
        <div class="container">

        <a href ="productonuevo.php" class="btn btn-primary">Agregar producto</a>
        <hr>
        <table class="table table-dark table-borderless">
            <thead>
                <tr>
                <th style="background:#464e4e;text-align:center"scope="col">Id</th>
                <th style="background:#464e4e;text-align:center"scope="col">Nombre</th>
                <th style="background:#464e4e;text-align:center"scope="col">Descripcion</th>
                <th style="background:#464e4e;text-align:center"scope="col">Imagen</th>
                <th style="background:#464e4e;text-align:center"scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
              <?php

                include "Config/conexion.php";

                $Sql= "SELECT * FROM producto ";
                $resultado = $conexion->query($Sql);

                while ($Fila = $resultado->fetch_assoc()) { ?>

                <tr >
                  <th style="background:#6a777;text-align:center;padding:15px" scope="row"><?php echo $Fila['id']?></th>
                  <td style="background:#6a777;text-align:center;padding:15px"><?php echo $Fila['nombre']?></td>
                  <td style="background:#6a777;text-align:center;padding:15px"><?php echo $Fila['descripcion']?></td>
                  <td style="background:#6a777;text-align:center;padding:15px"><img style= "width:150px ; height:150px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['imagen'])?>"  alt=""></td>
                  <td style="background:#6a777;text-align:center;padding:15px">
                    <a href="editar.php?id=<?php echo $Fila["id"]?>" class="btn btn-warning">Editar</a>
                    <a href="eliminar.php?id=<?php echo $Fila["id"]?>" class="btn btn-danger">Eliminar</a>
                  </td>
                </tr>
                
            </tbody>
         <?php } ?>
        </table>

    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>