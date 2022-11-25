<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\servicioturistico;
use Illuminate\Support\Str;

class ServicioturisticoController extends Controller
{
    public function indexp(){
        $resultados=DB::table('servicioturisticos')->get();
        $resultados2=DB::table('tiposervicios')->get();

       return view("servicioturisticopanel")
        ->with("resultados",$resultados)
        ->with("resultados2",$resultados2);  
    }
    
    public function guardar(Request $request){
        
        //dd($request);
       // $request->validate([
      //      'nombre'=>'required','descripcion'=>'required','direccion'=>'required','imagen'=>'required|image|mimes:jpeg,png,svg|max:1024'
       // ]);
    
        $servicio = new servicioturistico();
        $servicio->nombre=$request->input("nombre");
        $servicio->descripcion=$request->input("descripcion");
        $servicio->direccion=$request->input("direccion");
        $servicio->telf=$request->input("telf");
        $servicio->servicios=$request->input("servicios");
        $servicio->horario=$request->input("horario");
        $servicio->tiposervicio_id=$request->input("tiposervicio_id");
    if($request->hasfile("imagen")){
        $imagen=$request->file("imagen");   
        $nombreimagen=Str::slug($request->nombre).".".$imagen->guessExtension();
        $ruta=public_path("img/establecimientos/");
        //$imagen->move($ruta,$nombreimagen);
        copy($imagen->getRealPath(),$ruta.$nombreimagen);
        $servicio->imagen="img/establecimientos/".$nombreimagen;
    }
        $servicio->save();
        
         return redirect('/servicioturisticop');
    
     }

    public function alojamiento(){
        $aloja = servicioturistico::where('tiposervicio_id', '=', 1)->paginate(8);
        return view("alojamiento",compact('aloja'));
    }  

    public function restaurante(){
        $resta = servicioturistico::where('tiposervicio_id', '=', 2)->paginate(8);
        return view("restaurante",compact('resta'));
    }  

    public function transporte(){
        $trans = servicioturistico::where('tiposervicio_id', '=', 3)->paginate(8);
        return view("transporte",compact('trans'));
    }  

    public function clinicas(){
        $clini = servicioturistico::where('tiposervicio_id', '=', 4)->paginate(8);
        return view("clinicas",compact('clini'));
    } 
}
