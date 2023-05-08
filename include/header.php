
  <!-- Responsive navbar-->
  <div class="container header_logo">
    <div class="logo">
      <a class="navbar-brand" href="index.php">
        <img id="volaris-logo"
          src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Volaris-logo.svg/2560px-Volaris-logo.svg.png"
          alt="volaris Logo" draggable="false" height="30" />
      </a>
    </div>
    <div class="moneda">
      <span class="btn-moneda">
        <select>
          <option>Pesos Mexicanos - MXN</option>
          <option>Dolares Americanos - USD</option>
          <option>Euros - EUR</option>
        </select>
      </span>
    </div>
  </div>

  <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>  

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link <?= ($activePage == 'index') ? 'active':''; ?>" aria-current="page" href="index.php">Vuelos</a></li>
          <li class="nav-item"><a class="nav-link <?= ($activePage == 'reserva') ? 'active':''; ?>" href="reserva.php">Mi reserva</a></li>
          <li class="nav-item"><a class="nav-link <?= ($activePage == 'estatus') ? 'active':''; ?>" href="estatus.php">Estatus de vuelo</a></li>
          <li class="nav-item"><a class="nav-link <?= ($activePage == 'contacto') ? 'active':''; ?>" href="contacto.php">Contacto</a></li>
          <li class="nav-item"><a class="nav-link <?= ($activePage == 'volaris') ? 'active':''; ?>" href="volaris.php">Sobre volaris</a></li>
        </ul>
      </div>
    </div>
  </nav>
