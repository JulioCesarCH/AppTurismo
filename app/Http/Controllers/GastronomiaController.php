<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\gastronomia;
use Illuminate\Support\Str;
class GastronomiaController extends Controller
{
    public function index(){
        $gastros=gastronomia::paginate(8);
       return view("gastronomia",compact('gastros'));
    }  

    public function indexp(){
        $resultados=DB::table('gastronomias')->get();

    return view("gastronomiapanel")
        ->with("resultados",$resultados);  
    }
    public function guardar(Request $request){
        
        //dd($request);
       // $request->validate([
      //      'nombre'=>'required','descripcion'=>'required','direccion'=>'required','imagen'=>'required|image|mimes:jpeg,png,svg|max:1024'
       // ]);
    
        $gastro = new gastronomia();
        $gastro->nombre=$request->input("nombre");
        $gastro->descripcion=$request->input("descripcion");
    if($request->hasfile("imagen")){
        $imagen=$request->file("imagen");   
        $nombreimagen=Str::slug($request->nombre).".".$imagen->guessExtension();
        $ruta=public_path("img/gastronomia/");
        //$imagen->move($ruta,$nombreimagen);
        copy($imagen->getRealPath(),$ruta.$nombreimagen);
        $gastro->imagen="img/gastronomia/".$nombreimagen;
    }
        $gastro->save();
        
         return redirect('/gastronomiap');
    
     }
}
