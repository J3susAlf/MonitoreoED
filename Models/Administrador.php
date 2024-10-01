<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <script src="https://kit.fontawesome.com/b1b47db464.js" crossorigin="anonymous"></script>

</head>
<body class="bg-secondary-subtle">
    <div class="container mt-5 p-5 ">
        <div class="container-bottom">
          <a class="btn btn-danger btn-lg m-2" href="../index.php"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <?php 
        include "Conexion.php";
       // $sql = "SELECT * FROM articulos INNER JOIN salones ON articulos.id_salon = salones.id_salon";
        $sql = "SELECT * FROM salones";

        $result = $conexion->query($sql);
        ?>
      <div class="card" style="width: 18rem;">
          <div class="card-body">
            <?php 
            while ($datos = $result->fetch_object()){ ?>
            <h5 class="card-title"><strong>Salon <?=$datos->id_salon?></strong></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Información</h6>
            <p class="card-text"><Strong>Ventiladores: </Strong><?=$datos->ventiladores?></p>
            <p class="card-text"><strong>#Sillas zurdas:</strong> <?=$datos->sillas_zurdas?></p>
            <p class="card-text"><Strong>#Sillas:</Strong> <?=$datos->sillas?></p>
            <p class="card-text"><Strong>Escritorio:</Strong> <?=$datos->escritorio?></p>
            <p class="card-text"><Strong>Luces:</Strong> <?=$datos->luces?></p>
            <p class="card-text"><Strong>Pantallas: </Strong> <?=$datos->pantalla?></p>
            <p class="card-text"><Strong>Piso:</Strong> <?=$datos->piso?></p>
            <p class="card-text"><Strong>Puertas: </Strong> <?=$datos->puerta?></p>
            <p class="card-text"><Strong>Repetidor WIFI:</Strong> <?=$datos->repetidor?></p>
            <?php } ?>
            <a href="#" class="bottom ">Editar</a>
            <a href="#" class="card-link">Eliminar</a>
          </div>
      </div> 
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
</body>
</html>