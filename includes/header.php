<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $page_title ?></title>

    <!-- Bootstrap -->
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

        <!-- WebHostingHub Glyphs -->
        <link rel="stylesheet" href="css/whhg.min.css">

        <!-- DEVELOPMENT STYLES COMPILED FROM LESS SOURCE FILES USING NODE.JS / OVERRIDES BOOTSTRAP DEFAULTS -->
        <link rel="stylesheet" href="css/custom.min.css">

        <link href="http://vjs.zencdn.net/5.12.6/video-js.css" rel="stylesheet">

        <!-- If you'd like to support IE8 -->
        <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

  </head>
  <body style="background-color: rgb(230, 230, 230);">

    <div id="custom-bootstrap-menu" class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Rodul" class="logo img-responsive"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Navegación</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-menubuilder">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="bombeo.php">Bombeo</a>
                    </li>
                    <li><a href="truemax.php">Truemax</a>
                    </li>
                    <li><a href="refacciones.php">Refacciones</a>
                    </li>
                    <li class="dropdown" class="dropdown" class="dropdown" class="dropdown" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="productos.php">Concreto</a>
                            </li>
                            <li><a href="productos.php">Distanciadores</a>
                            </li>
                            <li><a href="productos.php">Impermeabilizantes</a>
                            </li>
                            <li><a href="productos.php">Pinturas</a>
                            </li>
                            <li><a href="productos.php">Aditivos</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
