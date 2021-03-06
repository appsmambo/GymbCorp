@extends("layouts/main")
@section('contenido')
      <section class="container no-padding">
        <ul class="bxslider">
          <li><img src="{{url('img/slider/01.jpg')}}" alt="" /></li>
          <li><img src="{{url('img/slider/02.jpg')}}" alt="" /></li>
          <li><img src="{{url('img/slider/03.jpg')}}" alt="" /></li>
          <li><img src="{{url('img/slider/04.jpg')}}" alt="" /></li>
        </ul>
      </section>
      <section class="container no-padding">
        <div class="row contenido">
          <div class="col-md-10 col-md-offset-1">
            <h2 class="borde text-center">
              SERVICIOS
              <br>
              <small>
                Orientados a mejorar la eficiencia y rentabilidad de nuestros clientes.
              </small>
            </h2>
            <div class="row">
              <div class="col-md-3">
                <p class="text-center servicio wow zoomIn" data-wow-delay=".5s">
                  <img src="{{url('img/servicio-1.png')}}" class="img-responsive center-block" alt="">
                  <br>
                  Asesoría y Servicio<br>Tributario
                  <br>
                  <span></span>
                  <a href="{{url('servicios/asesoria-y-servicio-tributario')}}" class="leer-mas">
                    Leer más
                  </a>
                </p>
              </div>
              <div class="col-md-3">
                <p class="text-center servicio wow zoomIn" data-wow-delay=".5s">
                  <img src="{{url('img/servicio-2.png')}}" class="img-responsive center-block" alt="">
                  <br>
                  Asesoría y Servicio<br>Financiero
                  <br>
                  <span></span>
                  <a href="{{url('servicios/asesoria-y-servicio-financiero')}}" class="leer-mas">
                    Leer más
                  </a>
                </p>
              </div>
              <div class="col-md-3">
                <p class="text-center servicio wow zoomIn" data-wow-delay=".5s">
                  <img src="{{url('img/servicio-3.png')}}" class="img-responsive center-block" alt="">
                  <br>
                  Asesoría y Servicio<br>Contable
                  <br>
                  <span></span>
                  <a href="{{url('servicios/asesoria-y-servicio-contable')}}" class="leer-mas">
                    Leer más
                  </a>
                </p>
              </div>
              <div class="col-md-3">
                <p class="text-center servicio wow zoomIn" data-wow-delay=".5s">
                  <img src="{{url('img/servicio-4.png')}}" class="img-responsive center-block" alt="">
                  <br>
                  Administración de<br>Recursos Humanos
                  <br>
                  <span></span>
                  <a href="{{url('servicios/administracion-de-recursos-humanos')}}" class="leer-mas">
                    Leer más
                  </a>
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <p class="text-center servicio wow zoomIn" data-wow-delay=".5s">
                  <img src="{{url('img/servicio-5.png')}}" class="img-responsive center-block" alt="">
                  <br>
                  Toma de<br>Inventarios
                  <br>
                  <span></span>
                  <a href="{{url('servicios/toma-de-inventarios')}}" class="leer-mas">
                    Leer más
                  </a>
                </p>
              </div>
              <div class="col-md-3">
                <p class="text-center servicio wow zoomIn" data-wow-delay=".5s">
                  <img src="{{url('img/servicio-6.png')}}" class="img-responsive center-block" alt="">
                  <br>
                  Consultoría<br>Empresarial
                  <br>
                  <span></span>
                  <a href="{{url('servicios/consultoria-empresarial')}}" class="leer-mas">
                    Leer más
                  </a>
                </p>
              </div>
              <div class="col-md-3">
                <p class="text-center servicio wow zoomIn" data-wow-delay=".5s">
                  <img src="{{url('img/servicio-7.png')}}" class="img-responsive center-block" alt="">
                  <br>
                  Seguridad y Salud<br>en el Trabajo
                  <br>
                  <span></span>
                  <a href="{{url('servicios/seguridad-y-salud-en-el-trabajo')}}" class="leer-mas">
                    Leer más
                  </a>
                </p>
              </div>
              <div class="col-md-3">
                <p class="text-center servicio wow zoomIn" data-wow-delay=".5s">
                  <img src="{{url('img/servicio-8.png')}}" class="img-responsive center-block" alt="">
                  <br>
                  Proyectos<br>Factibilidad
                  <br>
                  <span></span>
                  <a href="{{url('servicios/proyectos-factibilidad')}}" class="leer-mas">
                    Leer más
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
@stop