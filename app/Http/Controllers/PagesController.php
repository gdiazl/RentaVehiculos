<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    //
    const Agregar=3;
    
    public function inicio(){
        //$users=DB::select('select * from usuario');   
        //$cliente = App\Cliente::all();
         
          /*$buscar=$rts->get('buscame');*/
          /*$cliente = App\Vehiculo::all()->where('nombre','like','%'.$buscar.'%');*/
          
          $cliente=App\Vehiculo::all();
          
          
        return view('vehiculo', compact('cliente','nuevo'));
    }

    public function test(){

        return view('procesorenta');

    }

   public function crear(Request $request){
    //return $request->all();

     $nuevodato = new App\Cliente;
     $nuevodato->nombre = $request->nombre;
     $nuevodato->apellido = $request->apellido;
     $nuevodato->save();
     return back()->with('mensaje','Se inserto dato');
   }
  

}
