<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\DatosPersonales;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\AlumnosResource;
use App\Http\Resources\DatosPersonalesResource;

class StudentListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Alumno $alumnos)
    {
        //
        $alumnos = Alumno::all();
        //$datosPersonales = DB::table('datos_personales')->join('alumnos','datos_personales.alumno','alumnos.id')->select('datos_personales.fecha_nacimiento','datos_personales.edad')->get();
        //$response=['status'=>0,'alumno'=>$alumnos,'datosPersonales'=>$datosPersonales];
        return ['status'=>0,'alumnos'=>AlumnosResource::collection($alumnos)];
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
    public function show( $matricula)
    {
        // url: /api/alumnos/0319100123
        $alumnos = Alumno::where('matricula',$matricula)->firstOrFail()->get();
        return ['status'=>0,'alumnos'=>AlumnosResource::collection($alumnos)];
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
