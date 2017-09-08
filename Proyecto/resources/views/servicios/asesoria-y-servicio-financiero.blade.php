@extends("layouts/main")
@section('contenido')
      <section class="container no-padding">
        <h3>
          ASESORÍA Y SERVICIO FINANCIERO
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
                  ASESORÍA Y SERVICIO FINANCIERO - detalle
                </p>
                <div class="acordeon">
                  <a href="#">
                    Costos de importación <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                  <div>
                    &nbsp;
                  </div>
                </div>
                <div class="acordeon">
                  <a href="#">
                    Elaboración de presupuestos <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                  <div>
                    &nbsp;
                  </div>
                </div>
                <div class="acordeon">
                  <a href="#">
                    Elaboración de Estados Financieros <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                  <div>
                    Para ser presentados a los accionistas, gerencia o terceros (SUNAT, Bancos, organismos reguladores, entre otros).
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