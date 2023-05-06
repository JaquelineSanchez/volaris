<?php
$slider = "select * from promociones LIMIT 3";
$resultadosSlider = mysqli_query($cnn, $slider);
?>

<div class="row gx-4 gx-lg-5 align-items-center my-5">
      <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <?php
      while ($row = mysqli_fetch_array($resultadosSlider)) {        
        echo '<div class="carousel-item '.$row["activado"].'">';
        echo '<img src="img/'.$row["imagen"].'"
              class="d-block w-100 '.$row["clase"].'" height="400px" alt="'.$row["titulo"].'">';
        echo '<div class="carousel-caption d-none d-md-block">';
        echo '  <h1 class="fw-medium">'.$row["titulo"].'</h1>';
        echo '  <p class="fw-semibold">'.$row["descripcion"].'</p>';
        echo '  <p><a href="'.$row["url"].'" class="btn btn-primary" role="button">Reservar ahora!</a></p>';
        echo '</div>';
        echo '</div>';
      }
      ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#promoCarousel"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>