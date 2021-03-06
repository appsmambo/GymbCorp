<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GYMBCORP</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/jquery.bxslider.min.css')}}">
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=2053501288214327";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div id="preloader">
      <div id="status">
        <img src="{{url('img/preloader.gif')}}" alt="" class="img-responsive">
      </div>
    </div>
    <h1 class="hidden">
      GYMB corp - Asesores empresariales
    </h1>
    <section class="wrapper container no-padding">
      <section class="container">
        <header>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="row">
                <div class="col-md-5">
                  <a href="{{url('/')}}" class="logo">
                    <img src="{{url('img/logo.png')}}" alt="" class="img-responsive">
                    Asesores empresariales
                  </a>
                </div>
                <div class="col-md-7">
                  <p class="text-right">
                    <i class="fa fa-phone" aria-hidden="true"></i> Teléfono : <a href="tel:+51 994109265">+51 994109265</a> &nbsp;&nbsp;&nbsp;
                    <i class="fa fa-envelope" aria-hidden="true"></i> Email : <a href="mailto:gerencia@gymbcorp.com">gerencia@gymbcorp.com</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a> &nbsp;
                    <a href="#"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a> &nbsp;
                    <a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
                  </p>
                  <ul class="menu">
                    <li>
                      <a href="{{url('nosotros')}}">
                        NOSOTROS
                      </a>
                    </li>
                    <li>
                      <a href="{{url('servicios')}}">
                        SERVICIOS
                      </a>
                    </li>
                    <li>
                      <a href="{{url('contacto')}}">
                        CONTACTO
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </header>
      </section>
      @yield('contenido')
      <section class="container no-padding">
        <footer>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="row">
                <div class="col-md-3">
                  <p>
                    <a href="{{url('')}}" class="logo">
                      <img src="{{url('img/logo-footer.png')}}" alt="" class="img-responsive">
                      Asesores empresariales
                    </a>
                    <br><br class="hidden-xs">
                    Somos un grupo profesional independiente con dedicación exclusiva a prestar servicios de contabilidad, tributarios, administración de recursos humanos, consultoría y Asesoría Empresarial.
                    <br><br class="hidden-xs">
                    <a href="#"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;
                    <a href="#"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;
                    <a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
                  </p>
                </div>
                <div class="col-md-6">
                  <div class="fb-page" data-href="https://www.facebook.com/gymbcorporacion/" data-tabs="timeline" data-width="500" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/gymbcorporacion/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/gymbcorporacion/">GYMB CORP Asesores Empresariales</a></blockquote></div>
                </div>
                <div class="col-md-3">
                  <h4>
                    INFORMACIÓN
                  </h4>
                  <div class="row">
                    <div class="col-xs-4">
                      Dirección:
                    </div>
                    <div class="col-xs-8">
                      1052 - Av. Lorem Ipsum Lorem Ipsum - Lorem
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-4">
                      Teléfono:
                    </div>
                    <div class="col-xs-8">
                      <a href="tel:+51 994109265">+51 994109265</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-4">
                      Email:
                    </div>
                    <div class="col-xs-8">
                      <a href="mailto:gerencia@gymbcorp.com">gerencia@gymbcorp.com</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <section class="container copy">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <p class="copy text-right">
                &copy; 2017 Todos los derechos reservados.
              </p>
            </div>
          </div>
        </section>
      </section>
    </section>
    <script src="{{url('js/wow.min.js')}}"></script>
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/jquery.bxslider.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
  </body>
</html>