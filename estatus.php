<?php
include('include/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="author" content="Andrea Sánchez" />
  <title>Volaris</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
    <div class="row py-4 gx-4 gx-lg-5" id="contenido">
      <h1 class="font-weight-light">Buscar vuelo</h1>
      <div id="formulario">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="num-vuelo-tab" data-bs-toggle="tab" data-bs-target="#num-vuelo" type="button" role="tab" aria-controls="num-vuelo" aria-selected="true">Numero de vuelo</button>
            <button class="nav-link" id="ruta-fecha-tab" data-bs-toggle="tab" data-bs-target="#ruta-fecha" type="button" role="tab" aria-controls="ruta-fecha" aria-selected="false">Ruta y fecha</button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="num-vuelo" role="tabpanel" aria-labelledby="num-vuelo-tab" tabindex="0">
            <form class="row g-3 justify-content-center" method="get">
              <div class="col-12">
                <label for="inputVuelo" class="form-label"><b>Número de vuelo</b></label>
                <input type="text" name="numVuelo" class="form-control" id="inputVuelo" required>
              </div>
              <div class="col-12">
                <div class="input-group date md-6" data-provide="datepicker" id="salida">
                  <button class="btn btn-light" type="button" id="selectFecha"><i class="bi bi-calendar-event"></i></button>
                  <div class="form-floating">
                    <input class="form-control fechaSalida" name="fechaVuelo" data-date-format="yyyy/mm/dd" required>
                    <label for="fechaSalida">Selecciona la fecha de salida</label>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" name="enviar" class="btn btn-primary mb-3">Buscar</button>
              </div>
            </form>
            <?php
            if (isset($_GET['enviar'])) {
              $num = $_GET['numVuelo'];
              $fecha = $_GET['fechaVuelo'];
              $consultaID = "SELECT id_vuelo, origen, destino, status FROM vuelos where id_vuelo = {$num} AND fecha = STR_TO_DATE('{$fecha}', '%m/%d/%Y')";
              include_once("include/consultaVuelos.php");
              echo consultarVuelos($cnn,$consultaID,'Error! no existe ese vuelo, revisa que la información sea correcta');
              
            }
            ?>
          </div>
          <!-- Buscar por fecha -->
          <div class="tab-pane fade" id="ruta-fecha" role="tabpanel" aria-labelledby="ruta-fecha-tab" tabindex="0">
            <form class="row g-3" method="get">
              <?php
              include_once("include/rutasVuelos.php");
              echo formVuelos(1,"required");
              ?>
              <div class="col-12">
                <div class="input-group date md-6" data-provide="datepicker" id="salida">
                  <button class="btn btn-light" type="button" id="selectFecha"><i class="bi bi-calendar-event"></i></button>
                  <div class="form-floating">
                    <input class="form-control fechaSalida" name="fechaVuelo1" id="salida1" data-date-format="mm/dd/yyyy" required>
                    <label for="fechaSalida">Selecciona la fecha de salida</label>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" name="enviarRuta" class="btn btn-primary mb-3">Buscar</button>
              </div>
            </form>
            <?php
            if (isset($_GET['enviarRuta'])) {              
              include("include/consultaVuelos.php");
              if (isset($_GET['destinoVuelo1'])){                
                if (isset($_GET['salidaVuelo1']))
                  echo consultarVuelos($cnn,crearQuery(2),"Error, no existen vuelos con esos datos.");
                else
                echo consultarVuelos($cnn,crearQuery(1),"Error, no existen vuelos con esos datos.");
              }else{
                $fecha = $_GET['fechaVuelo1'];
              $query = "SELECT id_vuelo, origen, destino, status FROM vuelos where fecha = STR_TO_DATE('{$fecha}', '%m/%d/%Y')";
              $resultados = mysqli_query($cnn, $query);
              if (mysqli_num_rows($resultados) > 0) {
                echo '<table class="table table-success table-striped">';
                echo '<head>';
                echo ' <tr>';
                echo '    <th scope="col">Num. Vuelo</th>';
                echo '    <th scope="col">Origen</th>';
                echo '    <th scope="col">Destino</th>';
                echo '    <th scope="col">Status</th>';
                echo ' </tr>';
                echo '</head>';
                echo '<tbody>';
                while ($valores = mysqli_fetch_array($resultados)) {
                  echo '<tr>';
                    echo '<th scope="row">'.$valores["id_vuelo"].'</th>';
                    echo '<td>'.$valores["origen"].'</td>';
                    echo '<td>'.$valores["destino"].'</td>';
                    echo '<td>'.$valores["status"].'</td>';
                  echo '</tr>';                  
                }
                echo '</tbody>';
                echo '</table>';
              } else {
                echo '<div class="alert alert-danger" role="alert">';
                echo 'Error! no hay vuelos programados en esa fecha';
                echo '</div>';
              }
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row py-4 gx-4 gx-lg-5">
      <div class="card">
        <div class="card-body">
          Puedes revisar el estatus de tu vuelo desde 24 horas antes de la salida hasta 24 horas después de la llegada.
          Es muy fácil, solo ingresa el número de vuelo y la fecha o puedes buscar por ruta y fecha.
        </div>
      </div>
    </div>

    <!-- Resultados exitosos -->
  </div>

  <!-- Footer-->
  <?php
  include("include/footer.php");
  ?>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js" charset="UTF-8"></script>
  <script src="javaScript/estatus.js"></script>
</body>

</html>