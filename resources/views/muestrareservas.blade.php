@extends('plantilla')

@section('seccion')
<br>
<br>
<br>
<br>
<br>

<div class="container-fluid">
  
  <br>
  <br>
  <br>
  
    @foreach($correo->chunk(1) as $separa)
    
                    <div class="row">                     
                      <div class="col-sm-1" style="background-color:lavender;"><center><strong>RESERVA</strong></center></div>
                      <div class="col-sm-1" style="background-color:lavenderblush;"><center><strong>LICENCIA</strong></center></div>
                      <div class="col-sm-1" style="background-color:lavender;"><center><strong>NOMBRE</strong></center></div>
                      <div class="col-sm-1" style="background-color:lavenderblush;"><center><strong>APELLIDO</strong></center></div>
                      <div class="col-sm-1" style="background-color:lavender;"><center><strong>NACIMIENTO</strong></center></div>
                      <div class="col-sm-1" style="background-color:lavenderblush;"><center><strong>DPI</strong></center></div>
                      <div class="col-sm-1" style="background-color:lavender;"><center><strong>TELEFONO</strong></center></div>
                      <div class="col-sm-1" style="background-color:lavenderblush;"><center><strong>EMAIL</strong></center></div>

                      <!--<div class="col-sm-1" style="background-color:lavenderblush;"><center><strong>DIRECCION</strong></center></div>
                      <div class="col-sm-1" style="background-color:lavenderblush;"><center><strong>NIT</strong></center></div>
                      <div class="col-sm-1" style="background-color:lavenderblush;"><center><strong>LICENCIA</strong></center></div>-->
                      <div class="col-sm-1" style="background-color:lavenderblush;"><center><strong>ENTREGA</strong></center></div>
                      <div class="col-sm-1" style="background-color:lavenderblush;"><center><strong>DEVOLUCION</strong></center></div>
                      <div class="col-sm-1" style="background-color:lavenderblush;"><center><strong>PAGO</strong></center></div>
                      <div class="col-sm-1" style="background-color:lavenderblush;"><center><strong>PRECIO</strong></center></div>

                    </div>
                    
                      <div class="row">    
                        @foreach ($separa as $item) 
                        <div class="col-sm-1" style="background-color:lavender;"><center>{{ $item->no_reserva}}<center></div>
                        <div class="col-sm-1" style="background-color:lavenderblush;"><center>{{ $item->no_licencia}}</center></div>   
                        <div class="col-sm-1" style="background-color:lavender;"><center>{{ $item->nombres}}<center></div>
                        <div class="col-sm-1" style="background-color:lavenderblush;"><center>{{ $item->apellidos}}</center></div>   
                        <div class="col-sm-1" style="background-color:lavender;"><center>{{ $item->fecha_nacimiento}}<center></div>
                        <div class="col-sm-1" style="background-color:lavenderblush;"><center>{{ $item->dpi}}</center></div>   
                        <div class="col-sm-1" style="background-color:lavender;"><center>{{ $item->telefono}}<center></div>
                        <div class="col-sm-1" style="background-color:lavenderblush;"><center>{{ $item->email}}</center></div>   

                        <!--<div class="col-sm-1" style="background-color:lavenderblush;"><center>{{ $item->direccion}}</center></div>   
                        <div class="col-sm-1" style="background-color:lavenderblush;"><center>{{ $item->nit}}</center></div>   
                        <div class="col-sm-1" style="background-color:lavenderblush;"><center>{{ $item->no_licencia}}</center></div>   -->
                        <div class="col-sm-1" style="background-color:lavenderblush;"><center>{{ $item->fecha_entrega}}</center></div>   
                        <div class="col-sm-1" style="background-color:lavenderblush;"><center>{{ $item->fecha_devolucion}}</center></div>   
                        <div class="col-sm-1" style="background-color:lavenderblush;"><center>{{ $item->pago}}</center></div>   
                        <div class="col-sm-1" style="background-color:lavenderblush;"><center>{{ $item->precio}}</center></div>   

                        @endforeach  
                      </div>                    
                    @endforeach
</div>  


@endsection  