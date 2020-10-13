@extends('plantilla')

@section('seccion')

  <!--catalogo de autos-->
  <div class="container">

    <div class="row">

        <div class="col-lg-5">
        <h1 class="my-4">Reserva</h1>
        <h5 class="my-4">Datos del reservante</h5>
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre del Reservate</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nombre">
              <small id="emailHelp" class="form-text text-muted"><!--descripcion del campo--></small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Apellido del reservante</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="apellido">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Direccion del reservante</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="direccion">
              </div>
              <h5 class="my-4">Datos del vehiculo</h5>

              <div class="form-group">
                <label for="exampleInputEmail1">nombre vehiculo</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nombre">
                <small id="emailHelp" class="form-text text-muted"><!--descripcion del campo--></small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">tipo vehiculo</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="apellido">
              </div>
  
              <div class="form-group">
                  <label for="exampleInputPassword1">fecha solicitud</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="direccion">
                </div>

            <button type="submit" class="btn btn-primary">Reservar</button>
          </form>
    </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-7">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="data:image/jpeg;base64,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" alt="">
          <div class="card-body">
            <h3 class="card-title">Nombre del Auto</h3>
            <h4>Q precio</h4>
            <p class="card-text">Descripcion</p>
            <!--<span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>-->
            <!--descripcion-->
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>


  <!--final del catalogo de datos-->


@endsection
