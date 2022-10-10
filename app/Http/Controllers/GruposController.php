<?php

namespace App\Http\Controllers;

use App\Http\Resources\EstadisticaResource;
use App\Http\Resources\GruposResource;
use App\Models\Alumno;
use App\Models\DatosPersonales;
use App\Models\Grupo;
use Illuminate\Http\Request;

class GruposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $grupo = Grupo::all();
        $alumnos = Alumno::all(['matricula','nombre','foto']);

        return [
            'status'=>0,
            'grupo' => GruposResource::collection($grupo),
            'alumnos' => $alumnos,
            'estadisticas' => EstadisticaResource::collection($alumnos),
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($grupo)
    {
        // url: /api/grupos/{TI-IDGS-9A-202203} 
        $alumnogrupo = $grupo;
        $grupo = Grupo::where('id',$grupo)->FirstOrFail()->get();
        $alumnos = Alumno::where('grupo',$alumnogrupo)->FirstOrFail()->get(['matricula','nombre','foto']);
        //$alumnos = Alumno::all(['matricula','nombre','foto','grupo']);
        return [
            'status'=>0,
            'grupo' => GruposResource::collection($grupo),
            'alumnos' => $alumnos,
            'estadisticas' => EstadisticaResource::collection($alumnos),
        ];

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
