<?php

namespace App\Http\Controllers;
use App\Models\capacitacion;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CapacitacionController extends Controller
{
    public function index(){
            $resultados=DB::table('actividadcapacitacions')->get();
            $resultados2=DB::table('tiposervicios')->get();
            $resultados3=DB::table('capacitacions')->get();
    
           return view("capacitacion")
            ->with("resultados",$resultados)
            ->with("resultados2",$resultados2)
            ->with("resultados3",$resultados3);
       
     }  

     public function guardar(Request $request){
        
        //dd($request);
       // $request->validate([
      //      'nombre'=>'required','descripcion'=>'required','direccion'=>'required','imagen'=>'required|image|mimes:jpeg,png,svg|max:1024'
       // ]);
    
        $capacitacion = new capacitacion();
        $capacitacion->descripcion=$request->input("descripcion");
        $capacitacion->fecha=$request->input("fecha");
        $capacitacion->hora=$request->input("hora");
        $capacitacion->tiposervicio_id=$request->input("tiposervicio_id");
        $capacitacion->actividad_id=$request->input("actividad_id");
        $capacitacion->save();       
         return redirect('/capacitacion');
    
     }
    
}
