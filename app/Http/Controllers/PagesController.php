<?php

namespace App\Http\Controllers;
use App\Renta;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    //
    const Agregar=3;
    
    public function inicio(Request $request){
        
      if($request){
        $busqueda = trim($request -> get('search') );            
       // $cliente = Vehiculo::where('marca','LIKE','%'.$busqueda.'%')->orderBy('id','asc')->get();
        $cliente = DB::table('vehiculos')
        ->join('tipo_vehiculos','vehiculos.id_tipo_vehiculo','=','tipo_vehiculos.id_tipo_vehiculo')
        //->join('renta','vehiculos.id','=','rentas.id')
        ->select('vehiculos.*','tipo_vehiculos.descripcion')
        ->where('marca','LIKE','%'.$busqueda.'%')->orderBy('id','asc')
      ->get();

        return view('index',['cliente'=>$cliente,'search'=>$busqueda]);

     }
             
}



public function buscar( Request $request){
  //echo Form::text('username');
  //$respuesta = trim($dato->get('correo'));
  //dd($respuesta); 
    $respuesta = trim($request -> get('correo') );            
    if($respuesta){
    $reserva = Renta::where('email','LIKE','%'.$respuesta.'%')->orderBy('id','asc')->get();
    //$reserva=DB::table('rentas')
    //->where('email','LIKE','%'.$respuesta)->get();
  
    return view('muestrareservas',['correo'=>$reserva,'search'=>$respuesta]);
    }else{

      return('No Cuenta con reservas');
    }
}

    public function test($id_vehiculo){

      if($id_vehiculo){
        $busqueda = $id_vehiculo;

        $cliente = DB::table('vehiculos')
        ->where('id','LIKE','%'.$busqueda.'%')
        ->join('tipo_vehiculos','vehiculos.id_tipo_vehiculo','=','tipo_vehiculos.id_tipo_vehiculo')
        ->select('vehiculos.*','tipo_vehiculos.descripcion','tipo_vehiculos.precio')
        ->get();
     /*$cliente = Vehiculo::where('id','LIKE',$busqueda)->get();*/

          return view('detalleVehiculo',['cadena'=>$cliente]);
        }
    }


    public function renta($id){
            
      $id_vehiculo = $id;

      $cliente = DB::table('vehiculos')
     ->where('id','LIKE','%'.$id_vehiculo.'%')
         ->join('tipo_vehiculos','vehiculos.id_tipo_vehiculo','=','tipo_vehiculos.id_tipo_vehiculo')
         ->select('vehiculos.*','tipo_vehiculos.descripcion','tipo_vehiculos.precio')
         ->get();

         return view('formularioRenta',['cadena'=>$cliente]);           
          
    }

    public function rentaCrear(Request $request){       
     

        app\renta::create($request->all());
       return('Automovil rentado');
       
  }
  

}
