<?php $page_title = "Rodul S.A. de C.V."; ?>
<?php include('includes/header.php'); ?>

    <!-- Carousel -->
      <div id="hero">
        <div class="row fill">
          <div class="heroslide col-sm-12">
            <div id="myCarousel" class="carousel slide mainCarousel" data-ride="carousel">

                <!-- indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- wrapper for the slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="img/sh-01.png" alt="Rodul S.A. de C.V.">
                    </div>
                    <div class="item">
                        <img src="img/sh-02.png" alt="Rodul S.A. de C.V.">
                    </div>
                    <div class="item">
                        <img src="img/sh-03.png" alt="Truemax">
                    </div>
              </div>
                <!-- controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
          </div>
    </div> <!-- hero -->
    <div class="container cta">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <p class="lead">Somos una empresa especializada en productos y servicios relacionados con concreto, servicios de bombeo, venta de maquinaria y materia prima.</p>
        <button type="button" class="btn btn-primary btn-lg gradient">Conoce Más</button>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>

<?php include('includes/services.php') ?>

<?php include('includes/allies.php') ?>

<?php include('includes/footer.php') ?>
