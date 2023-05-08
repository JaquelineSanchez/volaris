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
    <link href="css/contacto.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <?php
    include("include/header.php");
    ?>
    <!-- Contenido-->
    <div class="container contenido px-4 px-lg-5">
        <div class="row py-4">
            <h1 class="font-weight-light">¡Buscanos en redes sociales!</h1>
            <div class="col-md-6 py-3">
                <img class="img-responsive" src="img/chatbot.gif"
                    height="400px">
            </div>
            <div class="col-md-6 py-3 funcionBot">
                <h3>Nuestro chatbot te ayudará a: </h3>
                <p class="lead">
                    <img src="https://cdn-icons-png.flaticon.com/512/262/262616.png" height="20px"> Hacer check-in
                    (vuelos nacionales) <br>
                    <img src="https://cdn-icons-png.flaticon.com/512/262/262616.png" height="20px"> Consultar el estatus
                    de vuelo <br></h4>
                    <img src="https://cdn-icons-png.flaticon.com/512/262/262616.png" height="20px"> Recuperar tu código
                    de reservación <br>
                    <img src="https://cdn-icons-png.flaticon.com/512/262/262616.png" height="20px"> Cotizar un vuelo
                    <br>
                    <img src="https://cdn-icons-png.flaticon.com/512/262/262616.png" height="20px"> Resolver tus dudas
                    sobre nuestros servicios adicionales y políticas<br>
                <h5>Vane te atenderá de forma inmediata. En caso de requerir atención de un agente humano, el tiempo
                    máximo de respuesta es de 1 hora. </h5>
                </p>
                <div class="btn-group">
                    <a href="https://www.messenger.com/t/5830082681/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0"
                        class="btn btn-primary"> Facebook</a>
                    <a href="https://api.whatsapp.com/send/?phone=5215558988599&text=Hola%2C+los+contacto+para+recibir+apoyo+con+una+solicitud+&type=phone_number&app_absent=0"
                        class="btn btn-success"> WhatsApp</a>
                </div>
            </div>
        </div>

        <!-- Formulario contacto -->
        <div class="row py-4">
            <h3 class="font-weight-light">
                ¿Necesitas levantar una aclaración o darle seguimiento a un ticket?
                ¿Tienes algún problema con tu membresía v.club, suscripción v.pass o Tarjeta de Crédito Volaris INVEX?
            </h3>

        </div>
        <div class="row form-solicitud py-4">
            <h1 class="display-6">Envia una solicitud</h1>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputNombre" class="form-label"><b>Nombre completo del cliente</b></label>
                    <input type="text" class="form-control" id="inputNombre">
                </div>
                <div class="col-md-6">
                    <label for="inputCorreo" class="form-label"><b>Correo electrónico</b></label>
                    <input type="text" class="form-control" id="inputCorreo">
                </div>
                <div class="col-md-6">
                    <label for="inputAsunto" class="form-label"><b>Asunto (título de tu solicitud)</b></label>
                    <input type="text" class="form-control" id="inputAsunto">
                </div>
                <div class="col-md-6">
                    <label for="inputClave" class="form-label"><b>Clave de reservación</b></label>
                    <input type="text" class="form-control" id="inputClave">
                </div>
                <div class="col-md-6">
                    <label for="inputTel" class="form-label"><b>Telefono</b></label>
                    <input type="text" class="form-control" id="inputTel">
                </div>
                <div class="col-md-6">
                    <label for="selectMotivo" class="form-label"><b>Motivo de aclaración</b></label>
                    <select id="selectMotivo" class="form-select">
                        <option selected>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="TextareaSolicitud" class="form-label"><b>Solicitud</b></label>
                    <textarea class="form-control" id="TextareaSolicitud" rows="3" placeholder="Cuéntanos brevemente en qué podemos ayudarte"></textarea>
                  </div>
                <div class="col-md-12">
                    <label for="formFileMultiple" class="form-label"><b>Adjuntar archivos</b></label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                </div>
                <div class="col-md-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Acepto Términos y Condiciones, así como el Aviso de Privacidad
                      </label>
                    </div>
                  </div>  
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    </div>

    <!-- Footer-->
    <?php
    include("include/footer.php");
    ?>
</body>

</html>