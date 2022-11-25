<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\atractivoturistico;
use Illuminate\Support\Str;

class AtractivoturisticoController extends Controller
{

    public function index(){
        $atractivos=atractivoturistico::paginate(8);
        return view("atractivoTuristico",compact('atractivos'));    
  }  

  public function indexp(){
    $resultados=DB::table('atractivoturisticos')->get();

   return view("atractivoturisticopanel")
    ->with("resultados",$resultados);

}  

public function guardar(Request $request){
        
    //dd($request);
    //$request->validate([
   //     'nombre'=>'required','descripcion'=>'required','ubicacion'=>'required','imagen'=>'required|image|mimes:jpeg,png,svg|max:1024'
   // ]);

    $atractivo = new atractivoturistico();
    $atractivo->nombre=$request->input("nombre");
    $atractivo->descripcion=$request->input("descripcion");
    $atractivo->ubicacion=$request->input("ubicacion");
if($request->hasfile("imagen")){
    $imagen=$request->file("imagen");   
    $nombreimagen=Str::slug($request->nombre).".".$imagen->guessExtension();
    $ruta=public_path("img/atractivos/");
    //$imagen->move($ruta,$nombreimagen);
    copy($imagen->getRealPath(),$ruta.$nombreimagen);
    $atractivo->imagen="img/atractivos/".$nombreimagen;
}
    $atractivo->save();
    
     return redirect('/atractivoturisticop');

 }

}
