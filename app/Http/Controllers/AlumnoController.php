<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index(){
        $alumnos = Alumno::all();
        return $alumnos;
    }

    public function show($dni){
        $alumno = Alumno::where('dni',$dni)->first();
        return $alumno;
    }
}
