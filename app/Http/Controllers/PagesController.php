<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models;

class PagesController extends Controller
{
    public function home(){
        $entretenimientos = Models\Entretenimiento::all();
        return view('welcome', compact('entretenimientos'));
    }

    public function detalle($id){
        $entretenimientos = Models\Entretenimiento::findOrFail($id);

        $categorias = $entretenimientos->id_categoria;
        $categoria = Models\Categoria::find($categorias);

        $historial = DB::table('historial__entretenimientos')
                                ->where('id_entretenimiento', $id)
                                ->get();

        $generos = DB::table('entretenimientos')
                                ->join('genero__entretenimientos', 'entretenimientos.id_entretenimiento', '=', 'genero__entretenimientos.id_entretenimiento')
                                ->join('generos', 'generos.id_genero', '=', 'genero__entretenimientos.id_genero')
                                ->select('generos.nombre')
                                ->where('entretenimientos.id_entretenimiento', $id)
                                ->get();              

        return view('entretenimiento.detalle', compact('entretenimientos'
                                                        ,'categoria'
                                                        , 'historial'
                                                        ,'generos'));
    }

    public function registro(){
        $categorias = Models\Categoria::all();
        
        $generos1 = DB::table('generos')
                        ->whereBetween('id_genero', [1,6])
                        ->get();
        $generos2 = DB::table('generos')
                        ->whereBetween('id_genero', [7,12])
                        ->get();
        return view('register', compact('categorias', 'generos1', 'generos2'));
    }

    public function crear(Request $request){

        $request-> validate([
            'genders' => 'required'
        ]);

        $entretenimientoNuevo = new Models\Entretenimiento;
        $entretenimientoNuevo->nombre = $request->nombre;
        $entretenimientoNuevo->descripcion = $request->descripcion;
        $entretenimientoNuevo->anio_estreno = $request->anio_estreno;
        $entretenimientoNuevo->id_categoria = $request->id_categoria;
        $entretenimientoNuevo->id_espectador = 1;
        $entretenimientoNuevo -> save();

        $id_entretenimiento = $entretenimientoNuevo -> id_entretenimiento;
        $this->crear_historial_entretenimiento($request, $id_entretenimiento);
        $this->crear_genero_entretenimiento($request, $id_entretenimiento);

        return back()-> with('exito', 'Entretenimiento registrado exitosamente!');
        //return $request-> genders;
    }

    private function crear_historial_entretenimiento(Request $request , $id_entretenimiento){
        $historial_entretenimiento = new Models\Historial_Entretenimiento;
        $historial_entretenimiento-> fecha_visto = $request->fecha_visto;
        $historial_entretenimiento-> visto_en = $request->visto_en;
        $historial_entretenimiento-> estrellas = $request->estrellas;
        $historial_entretenimiento-> id_entretenimiento = $id_entretenimiento;
        $historial_entretenimiento-> save();
    }

    private function crear_genero_entretenimiento(Request $request, $id_entretenimiento){
        foreach ($request->genders as $genero) {
            Models\Genero_Entretenimiento::create(
                ['id_entretenimiento' => $id_entretenimiento,
                'id_genero' =>$genero ]
            );
            
        }
    }

    public function editar($id){
        $entretenimientos = Models\Entretenimiento::findOrFail($id);

        $historial = DB::table('historial__entretenimientos')
                                ->where('id_entretenimiento', $id)
                                ->get();

        return view('entretenimiento.editar', compact('entretenimientos','historial'));
    }

    public function update(Request $request, $id){
        $entretenimientosUpdate = Models\Entretenimiento::findOrFail($id);
        $entretenimientosUpdate->nombre = $request->nombre;
        $entretenimientosUpdate->descripcion = $request->descripcion;
        $entretenimientosUpdate->anio_estreno = $request->anio_estreno;
        $entretenimientosUpdate->save();

        $historial_entretenimiento = DB::table('historial__entretenimientos')
                                ->where('id_entretenimiento', $id)
                                ->update(['fecha_visto' => $request->fecha_visto ,
                                           'visto_en' =>  $request->visto_en,
                                           'estrellas' =>  $request->estrellas]
                                        );

        return back()->with('mensaje', 'Entretenimiento editado!');
    }

    public function eliminar($id){
        $entretenimientosDelete = Models\Entretenimiento::findOrFail($id);
        $entretenimientosDelete->delete(); 
        return back();
    }
    
}
