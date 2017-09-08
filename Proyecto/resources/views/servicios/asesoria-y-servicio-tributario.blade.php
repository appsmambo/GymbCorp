@extends("layouts/main")
@section('contenido')
      <section class="container no-padding">
        <h3>
          ASESORÍA Y SERVICIO TRIBUTARIO
        </h3>
      </section>
      <section class="container no-padding">
        <div class="row contenido">
          <div class="col-lg-10 col-lg-offset-1">
            <div class="row">
              <div class="col-md-4 col-lg-5 hidden-xs hidden-sm">
                <img src="{{url('img/servicio-lateral.jpg')}}" class="img-responsive">
              </div>
              <div class="col-md-8 col-lg-7">
                <p>
                  ASESORÍA Y SERVICIO TRIBUTARIO - detalle
                </p>
                <div class="acordeon">
                  <a href="#">
                    PDT 621 – IGV – Renta <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                  <div>
                    &nbsp;
                  </div>
                </div>
                <div class="acordeon">
                  <a href="#">
                    PLAME <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                  <div>
                    &nbsp;
                  </div>
                </div>
                <div class="acordeon">
                  <a href="#">
                    PDB – IGV del Exportador <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                  <div>
                    &nbsp;
                  </div>
                </div>
                <div class="acordeon">
                  <a href="#">
                    Drawback <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                  <div>
                    &nbsp;
                  </div>
                </div>
                <div class="acordeon">
                  <a href="#">
                    Asesoría en Fiscalizaciones SUNAT <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                  <div>
                    &nbsp;
                  </div>
                </div>
                <div class="acordeon">
                  <a href="#">
                    Fraccionamiento de deudas tributarias ante SUNAT <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                  <div>
                    &nbsp;
                  </div>
                </div>
                <div class="acordeon">
                  <a href="#">
                    Devolución de Renta 4ta Categoría - Personas Naturales <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                  <div>
                    &nbsp;
                  </div>
                </div>
                <br>
                <a href="{{url('servicios')}}" class="btn btn-info sd leer-mas pull-right"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;Regresar</a>
              </div>
            </div>
          </div>
        </div>
      </section>
@stop