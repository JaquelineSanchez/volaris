<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />  
  <meta name="author" content="Andrea Sánchez" />
  <title>Volaris</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="css/general.css" rel="stylesheet" />
  <link href="css/estatus.css" rel="stylesheet" />
</head>

<body>
  <!-- Responsive navbar-->
  <?php
    include("include/header.php");
  ?>
  <!-- Contenido-->
  <div class="container contenido px-4 px-lg-5">
    <!-- buscar por numero -->
    <div class="row py-4 gx-4 gx-lg-5">
        <div class="card">
            <div class="card-body">
              Puedes revisar el estatus de tu vuelo desde 24 horas antes de la salida hasta 24 horas después de la llegada.
              Es muy fácil, solo ingresa el número de vuelo y la fecha o puedes buscar por ruta y fecha.
            </div>
          </div>
      <h1 class="font-weight-light">Buscar vuelo</h1>
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="num-vuelo-tab" data-bs-toggle="tab" data-bs-target="#num-vuelo" type="button" role="tab" aria-controls="num-vuelo" aria-selected="true">Numero de vuelo</button>
          <button class="nav-link" id="ruta-fecha-tab" data-bs-toggle="tab" data-bs-target="#ruta-fecha" type="button" role="tab" aria-controls="ruta-fecha" aria-selected="false">Ruta y fecha</button>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="num-vuelo" role="tabpanel" aria-labelledby="num-vuelo-tab" tabindex="0">
          <form class="row g-3 justify-content-center" id="formulario">
            <div class="col-12">
                <label for="inputVuelo" class="form-label"><b>Número de vuelo</b></label>
                <input type="text" class="form-control" id="inputVuelo">
              </div>
            <div class="col-12">      
              <label for="origen-select" class="form-label"> <b>Fecha de salida</b></label>        
              <select class="form-select form-select-md">
                <option selected>21/03/2023</option>
                <option value="1">...</option>                
              </select>
            </div>            
            <div class="col-12">
                <button type="submit" class="btn btn-primary mb-3">Buscar</button>
            </div>
          </form>
        </div>
        <!-- Buscar por fecha -->
        <div class="tab-pane fade" id="ruta-fecha" role="tabpanel" aria-labelledby="ruta-fecha-tab" tabindex="0">
          <form class="row g-3">
            <div class="col-md-6">      
              <label for="origen-select" class="form-label"> <b>Aeropuerto de salida</b></label>        
              <select class="form-select form-select-md">
                <option selected>-</option>
                <option value="1">...</option>                
              </select>
            </div>
            <div class="col-md-6">      
              <label for="destino-select" class="form-label"><b>Aeropuerto de destino</b></label>        
              <select class="form-select form-select-md">
                <option selected>-</option>
                <option value="1">...</option>                
              </select>
            </div>
            <div class="col-12">
              <label for="selectSalida" class="form-label"><b>Fecha de salida</b></label>
              <select id="selectSalida" class="form-select">
                <option selected>21/03/2023</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary mb-3">Buscar</button>
            </div>
          </form>
        </div>
        </div>
    </div>

  </div>

  <!-- Footer-->
  <?php
    include("include/footer.php");
  ?>
</body>

</html>