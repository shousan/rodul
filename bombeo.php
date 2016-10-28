<?php $page_title = "Bombeo - Rodul S.A. de C.V."; ?>
<?php include('includes/header.php'); ?>

<div class="container">
    <h1>Servicios de Bombeo</h1>

    <div class="row">
      <div class="col-sm-6">
          <br>
          <p class="lead">Contamos con equipo de bombeo en excelente estado mecánico y físico para brindar un servicio oportuno, de calidad y confiable a nuestros clientes. Personal altamente calificado y con experiencia en el área.</p>
      </div>

      <!-- Carousel -->
      <div class="col-sm-6">

          <div id="carousel-bombeo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-bombeo" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-bombeo" data-slide-to="1"></li>
          <li data-target="#carousel-bombeo" data-slide-to="2"></li>
          <li data-target="#carousel-bombeo" data-slide-to="3"></li>
          <li data-target="#carousel-bombeo" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/bombeo01.jpg" alt="Servicios de Bombeo">
          </div>
          <div class="item">
            <img src="img/bombeo02.jpg" alt="Servicios de Bombeo">
          </div>
          <div class="item">
            <img src="img/bombeo03.jpg" alt="Servicios de Bombeo">
          </div>
          <div class="item">
            <img src="img/bombeo04.jpg" alt="Servicios de Bombeo">
          </div>
          <div class="item">
            <img src="img/bombeo05.jpg" alt="Servicios de Bombeo">
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-bombeo" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-bombeo" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>
        <br>
      </div> <!--end Carousel -->
  </div>
</div> <!--end Container -->

<br>
<!-- GoogleMaps -->
<div class="container">
  <h2>Obras destacadas</h2>
  <br>
  <div class="col-sm-12">
    <iframe src="maps.html" width="100%" height="400px" frameborder="0" style="border:0">
    </iframe>
</div>
</div>
<br>
<!--end GoogleMaps -->



<?php include('includes/footer.php'); ?>
