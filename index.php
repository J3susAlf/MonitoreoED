<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Monitoreo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="Css/Index.css" />
  </head>
  <body class="bg-secondary-subtle">
    <div class="container p-5 mt-5">
      <form method="POST" class="border border-success rounded p-5 mb-3 bg-white">
        <?php 
        include "Models/Conexion.php";
        include "Controllers/Roles.php";
        ?>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">
            <strong>Correo Institucional</strong></label
          >
          <input
            type="email"
            class="form-control"
            id="Correo"
            name="Correo"
            aria-describedby="emailHelp"
          />
          <div id="emailHelp" class="form-text">Terminación @uacam.mx</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label"
            ><strong>Contraseña</strong></label>
          <input
            type="password"
            name="Contrasena"
            class="form-control"
            id="Contrasena"
          />
        </div>
        <div class="input">
          <input type="submit" name="Aceptar" class="btn btn-danger">
          </input>
        </div>
      </form>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
