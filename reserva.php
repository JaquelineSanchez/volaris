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
</head>

<body>
  <!-- Responsive navbar-->
  <?php
    include("include/header.php");
  ?>
  <!-- Contenido-->
  <div class="container contenido px-4 px-lg-5">
    <!-- buscar reserva -->
    <div class="row py-4 gx-4 gx-lg-5">
      <h1 class="font-weight-light">Ingresa tu código de reserva y apellido</h1>
      <form class="row g-3 justify-content-center formulario" id="formulario">
        <div class="col-12">
            <label for="inputCodigo" class="form-label"><b>Código de reservación</b></label>
            <input type="text" class="form-control" id="inputCodigo">
        </div>
        <div class="col-12">
            <label for="inputApe" class="form-label"><b>Apellido del cliente</b></label>
            <input type="text" class="form-control" id="inputApe">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
        </div>
      </form>
    </div>
    <div class="alert alert-light" role="alert">
        <b>¿Donde puedo encontrar mi código de reserva?</b><br>
        Puede encontrarlo en el correo de confirmación que se envia al correo electrónico de contacto en el momento de la compra.
      </div>
</div>

  </div>

  <!-- Footer-->
  <?php
    include("include/footer.php");
  ?>
</body>

</html>