@extends("layouts/main")
@section('contenido')
      <section class="container no-padding">
        <h3>
          CONTÁCTANOS
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
                  Mensaje aquí.
                </p>
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ingresa tu nombre">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ingresa tu apellido">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Ingresa tu email">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="8"></textarea>
                  </div>
                  <input class="btn btn-info sdleer-mas" type="submit" value="Enviar">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
@stop