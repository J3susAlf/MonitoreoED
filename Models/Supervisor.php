<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Supervisor</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <script src="https://kit.fontawesome.com/b1b47db464.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../Css/Index.css" />
  </head>
  <body class="bg-secondary-subtle">
    
    <div class="container p-4">
    <div class="container-bottom ">
        <a class="btn btn-danger btn-lg m-2" href="../index.php"><i class="fa-solid fa-arrow-left"></i></a>
      </div>
      <H2 class="p-3">FORMULARIO DE INVENTARIO DE SALONES</H2>
      <form method="POST" class="bg-white p-4 border border-success rounded">
        <div class="row mb-3">
          <div class="col-sm-2 input-group ">
          <label class="col-sm-2 col-form-label">Salon</label>
            <div class="input-group-prepend">
              <span class="input-group-text">FIEL-AUL</span>
            </div>
            <input type="number" name="NumeroSalon" class="form-control " min="1" step="1" required/>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Ventiladores</label>
          <div class="col-sm-10">
            <input type="number" name="Ventidalores" class="form-control"  />
          </div> 
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Sillas</label>
          <div class="col-sm-10">
            <input type="number" name="Sillas" class="form-control" />
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Sillas zurdas</label>
          <div class="col-sm-10">
            <input type="number" name="Zurdas" class="form-control" />
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Escritorio</label>
          <div class="col-sm-8">
            <select class="form-select" id="validationDefault04" name="escritorio" required>
              <option selected disabled value="">Seleccionar...</option>
              <option value="SI">SI</option>
              <option value="MALO">MALO</option>
              <option value="ROTO">ROTO</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Luces</label>
          <div class="col-sm-10">
            <input type="text" name="Luces" class="form-control" />
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Pantalla</label>
          <div class="col-sm-10">
            <input type="text" name="Pantalla" class="form-control" />
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Piso</label>
          <div class="col-sm-8">
            <select class="form-select" id="piso" name="piso" required>
              <option selected disabled value="">Seleccionar...</option>
              <option value="BIEN">BIEN</option>
              <option value="LEVANTADO">LEVANTADO</option>
              <option value="ROTO">ROTO</option>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Puerta</label>
          <div class="col-sm-8">
            <select class="form-select" id="puerta" name="puerta" required>
              <option selected disabled value="">Seleccionar...</option>
              <option value="ROTO">ROTO</option>
              <option value="NUEVO">NUEVO</option>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Repetidor</label>
          <div class="col-sm-8">
            <select class="form-select" id="repetidor" name="repetidor" required>
              <option selected disabled value="">Seleccionar...</option>
              <option value="SI">SI</option>
              <option value="NO">NO</option>
            </select>
          </div>
        </div>
        <input type="submit" name="Registro" class="btn btn-primary"></input>
      </form>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
