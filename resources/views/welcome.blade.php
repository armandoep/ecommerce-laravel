<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="icon" href="assets/images/items/1.jpg" type="image/x-icon"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       <!-- Custom styles for this template -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/ui.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">

        <link href="assets/css/all.min.css" rel="stylesheet">
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>

    </head>
    <body>

<header class="section-header">
<nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
<div class="container">
    <ul class="navbar-nav d-none d-md-flex mr-auto">
    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Entregas</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Pagos</a></li>
    </ul>

</div> <!-- container //  -->
</nav> <!-- header-top-light.// -->
<section class="header-main border-bottom">
  <div class="container">
<div class="row align-items-center">
  <div class="col-lg-2 col-6">
    <a href="#" class="brand-wrap">
      Supermercado
    </a> <!-- brand-wrap.// -->
  </div>
  <div class="col-lg-6 col-12 col-sm-12">
    <form action="#" class="search">
      <div class="input-group w-100">
          <input type="text" class="form-control" placeholder="Buscar">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
    </form> <!-- search-wrap .end// -->
  </div> <!-- col.// -->
  <div class="col-lg-4 col-sm-6 col-12">
    <div class="widgets-wrap float-md-right">
      <div class="widget-header  mr-3">
        <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
        <span class="badge badge-pill badge-danger notify">0</span>
      </div>
      <div class="widget-header icontext">
        <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
        <div class="text">
          <span class="text-muted">Bienvenido!</span>
          <div>
            <a href="/login">Iniciar Sesión</a> |
            <a href="/register"> Registrarse</a>
          </div>
        </div>
      </div>
    </div> <!-- widgets-wrap.// -->
  </div> <!-- col.// -->
</div> <!-- row.// -->
  </div> <!-- container.// -->
</section> <!-- header-main .// -->
<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i>  Todas las Cateogorias</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Moda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Supermercado</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Electrónicos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bebes y juguetes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Deportes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ropa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Muebles</a>
        </li>
      </ul>
    </div> <!-- collapse .// -->
  </div> <!-- container .// -->
</nav>
</header> <!-- section-header.// -->
<!-- ========================= SECTION INTRO ========================= -->
<section class="section-intro padding-y-sm">
<div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="assets/images/banner2.jpg" class="d-block w-100 h-50" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/images/banner1.jpg" class="d-block w-100 h-50" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/images/banner3.jpeg" class="d-block w-100 h-50" alt="...">
          </div>
        </div>
      </div>
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
<!-- ========================= SECTION FEATURE ========================= -->
<section class="section-content padding-y-sm">
<div class="container">
<article class="card card-body">
<div class="row">
  <div class="col-md-4">
    <figure class="item-feature">
      <span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
      <figcaption class="pt-3">
        <h5 class="title">Entrega rápida</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
      </figcaption>
    </figure> <!-- iconbox // -->
  </div><!-- col // -->
  <div class="col-md-4">
    <figure  class="item-feature">
      <span class="text-primary"><i class="fa fa-2x fa-landmark"></i></span>
      <figcaption class="pt-3">
        <h5 class="title">Entrategias creativas</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         </p>
      </figcaption>
    </figure> <!-- iconbox // -->
  </div><!-- col // -->
    <div class="col-md-4">
    <figure  class="item-feature">
      <span class="text-primary"><i class="fa fa-2x fa-lock"></i></span>
      <figcaption class="pt-3">
        <h5 class="title">Seguridad en las compras</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         </p>
      </figcaption>
    </figure> <!-- iconbox // -->
  </div> <!-- col // -->
</div>
</article>
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION FEATURE END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
<div class="container">
<header class="section-heading">
  <h3 class="section-title">Productos populares</h3>
</header><!-- sect-heading -->

<div class="row">
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/1.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Camisa</a>

        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reseñas</span>
        </div>
        <div class="price mt-1">Q179.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/2.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Sueter</a>

        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reseñas</span>
        </div>
        <div class="price mt-1">Q280.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/3.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Shorts</a>

        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reseñas</span>
        </div>
        <div class="price mt-1">Q56.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/4.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Mochila</a>

        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reseñas</span>
        </div>
        <div class="price mt-1">Q179.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
<div class="container">
<header class="section-heading">
  <h3 class="section-title">Nuevos productos</h3>
</header><!-- sect-heading -->
<div class="row">
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/5.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Funda IPad</a>

        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reseñas</span>
        </div>
        <div class="price mt-1">Q179.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/6.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Sillon</a>

        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reseñas</span>
        </div>
        <div class="price mt-1">Q280.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/7.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Apple Watch</a>

        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reseñas</span>
        </div>
        <div class="price mt-1">Q56.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/9.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Audifonos</a>

        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reseñas</span>
        </div>
        <div class="price mt-1">Q179.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-bottom-sm">
<div class="container">
<header class="section-heading">
  <a href="#" class="btn btn-outline-primary float-right">See all</a>
  <h3 class="section-title">Recomendados</h3>
</header><!-- sect-heading -->
<div class="row">
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/1.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Camisa</a>
        <div class="price mt-1">Q179.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/2.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Sueter</a>
        <div class="price mt-1">Q280.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/3.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Shorts</a>
        <div class="price mt-1">Q56.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/4.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Mochila</a>
        <div class="price mt-1">Q179.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<!-- ========================= SECTION  ========================= -->
<section class="section-name bg padding-y-sm">
<div class="container">
<header class="section-heading">
  <h3 class="section-title">Nuestas marcas</h3>
</header><!-- sect-heading -->
<div class="row">
  <div class="col-md-2 col-6">
    <figure class="box item-logo">
      <a href="#"><img src="assets/images/logos/logo1.png"></a>
      <figcaption class="border-top pt-2">36 Productos</figcaption>
    </figure> <!-- item-logo.// -->
  </div> <!-- col.// -->
  <div class="col-md-2  col-6">
    <figure class="box item-logo">
      <a href="#"><img src="assets/images/logos/logo2.png"></a>
      <figcaption class="border-top pt-2">980 Productos</figcaption>
    </figure> <!-- item-logo.// -->
  </div> <!-- col.// -->
  <div class="col-md-2  col-6">
    <figure class="box item-logo">
      <a href="#"><img src="assets/images/logos/logo3.png"></a>
      <figcaption class="border-top pt-2">25 Productos</figcaption>
    </figure> <!-- item-logo.// -->
  </div> <!-- col.// -->
  <div class="col-md-2  col-6">
    <figure class="box item-logo">
      <a href="#"><img src="assets/images/logos/logo4.png"></a>
      <figcaption class="border-top pt-2">72 Productos</figcaption>
    </figure> <!-- item-logo.// -->
  </div> <!-- col.// -->
  <div class="col-md-2  col-6">
    <figure class="box item-logo">
      <a href="#"><img src="assets/images/logos/logo5.png"></a>
      <figcaption class="border-top pt-2">41 Productos</figcaption>
    </figure> <!-- item-logo.// -->
  </div> <!-- col.// -->
  <div class="col-md-2  col-6">
    <figure class="box item-logo">
      <a href="#"><img src="assets/images/logos/logo2.png"></a>
      <figcaption class="border-top pt-2">12 Productos</figcaption>
    </figure> <!-- item-logo.// -->
  </div> <!-- col.// -->
</div> <!-- row.// -->
</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->
<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y">
<div class="container">
<h3 class="mb-3">Descarga nuestra aplicación</h3>
<a href="#"><img src="assets/images/misc/appstore.png" height="40"></a>
</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ======================= -->
<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top bg">
  <div class="container">
    <section class="footer-top  padding-y">
      <div class="row">
        <aside class="col-md col-6">
          <h6 class="title">Marcas</h6>
          <ul class="list-unstyled">
            <li> <a href="#">Adidas</a></li>
            <li> <a href="#">Puma</a></li>
            <li> <a href="#">Reebok</a></li>
            <li> <a href="#">Nike</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Empresa</h6>
          <ul class="list-unstyled">
            <li> <a href="#">Sobre nosotros</a></li>
            <li> <a href="#">Carreras</a></li>
            <li> <a href="#">Terminos y Condiciones</a></li>
            <li> <a href="#">Mapa del sitio</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Ayuda</h6>
          <ul class="list-unstyled">
            <li> <a href="#">Contactanos</a></li>
            <li> <a href="#">Reembolsos</a></li>
            <li> <a href="#">Estado de una orden</a></li>
            <li> <a href="#">Información de compra</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Cuenta</h6>
          <ul class="list-unstyled">
            <li> <a href="/login">Inicio de sesión</a></li>
            <li> <a href="/register">Registrarse</a></li>
          </ul>
        </aside>
        <aside class="col-md">
          <h6 class="title">Social</h6>
          <ul class="list-unstyled">
            <li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
            <li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
            <li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
            <li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
          </ul>
        </aside>
      </div> <!-- row.// -->
    </section>  <!-- footer-top.// -->
    <section class="footer-bottom row">
      <div class="col-md-2">
        <p class="text-muted">2021 Supermercado</p>
      </div>
      <div class="col-md-8 text-md-center">
        <span  class="px-2">info@com</span>
        <span  class="px-2">+502-000-0000</span>
        <span  class="px-2">Guatemala</span>
      </div>
      <div class="col-md-2 text-md-right text-muted">
        <i class="fab fa-lg fa-cc-visa"></i>
        <i class="fab fa-lg fa-cc-paypal"></i>
        <i class="fab fa-lg fa-cc-mastercard"></i>
      </div>
    </section>
  </div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->

    </body>
</html>
