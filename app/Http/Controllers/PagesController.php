<?php

namespace App\Http\Controllers;
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
        ->join('tipo_vehiculos','vehiculos.id_tipo_vehiculo','=','tipo_vehiculos.id_tipo')
        //->join('renta','vehiculos.id','=','rentas.id')
        ->select('vehiculos.*','tipo_vehiculos.descripcion')
        ->where('marca','LIKE','%'.$busqueda.'%')->orderBy('id_vehiculo','asc')
      ->get();

        return view('index',['cliente'=>$cliente,'search'=>$busqueda]);

     }
             
}

    public function test($id){

      if($id_vehiculo){
        $busqueda = $id_vehiculo;

        $cliente = DB::table('vehiculos')
        ->where('id_vehiculo','LIKE','%'.$busqueda.'%')
        ->join('tipo_vehiculos','vehiculos.id_tipo_vehiculo','=','tipo_vehiculos.id_tipo')
        ->select('vehiculos.*','tipo_vehiculos.descripcion','tipo_vehiculos.precio')
        ->get();
     /*$cliente = Vehiculo::where('id','LIKE',$busqueda)->get();*/

          return view('procesorenta',['cadena'=>$cliente]);
        }
    }


   public function renta(){
  }

  public function rentaCrear(){
  }
  

}
