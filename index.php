<?php
    include("include/conexion.php");
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
  <link href="css/index.css" rel="stylesheet" />
  <link href="css/general.css" rel="stylesheet" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  </head>

<body>
  <!-- Responsive navbar-->
  <?php
    include("include/header.php");
  ?>

  <!-- Contenido de pagina-->
  <div class="container contenido px-4 px-lg-5">
    <!-- carrusel Promos-->
    <?php
    include("include/promos.php");
    ?>
    <!-- buscar vuelo -->
    <div class="row py-4 gx-4 gx-lg-5">
      <h1 class="font-weight-light">Buscar vuelo</h1>
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="via-redo-tab" data-bs-toggle="tab" data-bs-target="#via-redo"
            type="button" role="tab" aria-controls="via-redo" aria-selected="true">Viaje redondo</button>
          <button class="nav-link" id="via-sen-tab" data-bs-toggle="tab" data-bs-target="#via-sen" type="button"
            role="tab" aria-controls="via-sen" aria-selected="false">Viaje sencillo</button>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="via-redo" role="tabpanel" aria-labelledby="via-redo-tab"
          tabindex="0">
          <form class="row g-3">
            <div class="col-md-6">
              <label for="origen-select" class="form-label"> <b>Origen</b></label>
              <select class="form-select form-select-md">
                <option selected>Selecciona el lugar de origen</option>
                <option value="1">...</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="destino-select" class="form-label"><b>Destino</b></label>
              <select class="form-select form-select-md">
                <option selected>Selecciona el lugar de destino</option>
                <option value="1">...</option>
              </select>
            </div>
            <div class="col-md-6">
              <div class="escala-check">
                <input class="form-check-input" type="checkbox" id="escalaCheck">
                <label class="form-check-label" for="escalaCheck">
                  Vuelo con escala
                </label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="directo-check">
                <input class="form-check-input" type="checkbox" id="directoCheck">
                <label class="form-check-label" for="directoCheck">
                  Vuelo sin escala
                </label>
              </div>
            </div>        
            <div class="col-md-6">
                <div class="input-group date md-6" data-provide="datepicker" id="salida">
                    <button class="btn btn-light" type="button" id="selectFecha"><i class="bi bi-calendar-event"></i></button>                    
                    <div class="form-floating">
                    <input class="form-control fechaSalida" data-date-format="mm/dd/yyyy">
                    <label for="fechaSalida">Selecciona la fecha de salida</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group date md-6" data-provide="datepicker" id="regreso">
                    <button class="btn btn-light" type="button" id="selectFecha"><i class="bi bi-calendar-event"></i></button>                    
                    <div class="form-floating">
                    <input class="form-control fechaRegreso" data-date-format="mm/dd/yyyy">
                    <label for="fechaRegresp">Selecciona la fecha de regreso</label>
                    </div>
                </div>
            </div>                        
            <div class="col-md-6">
              <label for="inputPromo" class="form-label"><b>Codigo de promoción</b></label>
              <input type="text" class="form-control" id="inputPromo" placeholder="Opcional...">
            </div>
            <div class="col-md-12">
              <div class="btn-group buscar-vuelo-btn">
                <a href="#" class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/68/68380.png"
                    height="20px"> Buscar vuelo</a>
                <a href="https://www.yavas.com/?utm_source=volaris_icon_yavas1&utm_medium=referral&utm_campaign=es&adfcd=1679363443.OajPAUfx30SquAvynPn0Vw.MjYzMjYxNSwxODY5NzQz"
                  class="btn btn-primary"> <img src="https://cdn-icons-png.flaticon.com/512/1475/1475996.png"
                    height="20px"> Buscar vuelo + hotel</a>
              </div>
            </div>
          </form>
        </div>
        <!-- Viaje de ida -->
        <div class="tab-pane fade" id="via-sen" role="tabpanel" aria-labelledby="via-sen-tab" tabindex="0">
          <form class="row g-3">
            <div class="col-md-6">
              <label for="origen-select" class="form-label"> <b>Origen</b></label>
              <select class="form-select form-select-md">
                <option selected>Selecciona el lugar de origen</option>
                <option value="1">...</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="destino-select" class="form-label"><b>Destino</b></label>
              <select class="form-select form-select-md">
                <option selected>Selecciona el lugar de destino</option>
                <option value="1">...</option>
              </select>
            </div>
            <div class="col-md-6">
              <div class="escala-check">
                <input class="form-check-input" type="checkbox" id="escalaCheck">
                <label class="form-check-label" for="escalaCheck">
                  Vuelo con escala
                </label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="directo-check">
                <input class="form-check-input" type="checkbox" id="directoCheck">
                <label class="form-check-label" for="directoCheck">
                  Vuelo sin escala
                </label>
              </div>
            </div>
            <div class="col-md-6">
              <label for="selectSalida" class="form-label"><b>Fecha de salida</b></label>
              <select id="selectSalida" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputPasajeros" class="form-label"><b>Numero de pasajeros</b></label>
              <select id="inputPasajeros" class="form-select">
                <option selected>1 pasajero</option>
                <option>2 pasajeros</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputPromo" class="form-label"><b>Codigo de promoción</b></label>
              <input type="text" class="form-control" id="inputPromo" placeholder="Opcional...">
            </div>
            <div class="col-md-12">
              <div class="btn-group buscar-vuelo-btn">
                <a href="#" class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/68/68380.png"
                    height="20px"> Buscar vuelo</a>
                <a href="https://www.yavas.com/?utm_source=volaris_icon_yavas1&utm_medium=referral&utm_campaign=es&adfcd=1679363443.OajPAUfx30SquAvynPn0Vw.MjYzMjYxNSwxODY5NzQz"
                  class="btn btn-primary"> <img src="https://cdn-icons-png.flaticon.com/512/1475/1475996.png"
                    height="20px"> Buscar vuelo + hotel</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- carrusel membresias-->
    <section class="membresias py-4">
      <div class="container">
        <h1 class="font-weight-light">Membresias</h1>
        <div class="row">
          <div class="col-sm-12">
            <div id="membresias-tipos" class="owl-carousel">
              <div class="item">
                <div class="card border-primary">
                  <img
                    src="img/vClub.jpg"
                    class="card-img-top" height="178px" alt="v.club">
                  <div class="card-body">
                    <h3 class="card-title">
                      <center><b>v.club</b></center>
                    </h3>
                    <p class="card-text">Descuentos en nuestras tarifas para cada vuelo. Viaja al precio más bajo en Volaris.
                    </p>
                  </div>
                  <div class="card footer">
                    <a class="btn btn-primary" href="https://vclub.volaris.com/y4/subscriptions/vclub" role="button">Obtener ahora</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card border-primary">
                  <img src="img/invex.jpg"
                    class="card-img-top" alt="invex">
                  <div class="card-body">
                    <h3 class="card-title">
                      <center><b>INVEX</b></center>
                    </h3>
                    <p class="card-text">Acumula pesos para comprar tus vuelos. ¡no millas ni puntos! Además, obtén equipaje
                      gratis y meses sin intereses.</p>
                  </div>
                  <div class="card footer">
                    <a class="btn btn-primary" href="https://cms.volaris.com/es/informacion-util/opciones-de-pago/tarjetas-volaris-invex/" role="button">Obtener ahora</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card border-primary">
                  <img src="img/vBusiness.jpg" class="card-img-top"
                    alt="v.business">
                  <div class="card-body">
                    <h3 class="card-title">
                      <center><b>v.business</b></center>
                    </h3>
                    <p class="card-text">La membresía con beneficios especiales para tus viajes de negocio.</p>
                  </div>
                  <div class="card footer">
                    <a class="btn btn-primary" href="https://cms.volaris.com/es/informacion-util/vempresa/" role="button">Obtener ahora</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card border-primary">
                  <img
                    src="img/vPass.jpeg"
                    class="card-img-top" alt="v.pass">
                  <div class="card-body">
                    <h3 class="card-title">
                      <center><b>v.pass</b></center>
                    </h3>
                    <p class="card-text">Un viaje te espera cada mes con V.pass, tu suscripción a vuelos.</p>
                  </div>
                  <div class="card footer">
                    <a class="btn btn-primary" href="https://vpass.volaris.com/y4/subscriptions" role="button">Obtener ahora</a>
                  </div>
                </div>
              </div> 
          </div> 
    </section>
  </div>      
  <!-- Footer-->
  <?php
    include("include/footer.php");
    ?>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js" charset="UTF-8"></script>  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js'></script>
  <script src="javaScript/auxiliares.js"></script>  
</body>

</html>