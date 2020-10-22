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
      
          
     

       // $cliente = Vehiculo::where('marca','LIKE','%'.$busqueda.'%')->orderBy('id','asc')->get();
        
        $cliente = DB::table('vehiculos')
        ->join('tipo_vehiculos','vehiculos.id_tipo_vehiculo','=','tipo_vehiculos.id_tipo_vehiculo')
        //->join('renta','vehiculos.id','=','rentas.id')
        ->select('vehiculos.*','tipo_vehiculos.descripcion')
        //->where('marca','LIKE','%'.$busqueda.'%')->orderBy('id','asc')
      ->get();



        //dd($busqueda);
        return view('vehiculo',['cliente'=>$cliente, 'search']);
     
    
   
}

    public function test(){

        return view('procesorenta');

    }

   public function renta(){
  }

  public function rentaCrear(){
  }
  

}
