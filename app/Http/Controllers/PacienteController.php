<?php

namespace App\Http\Controllers;

use App\Models\Regristro;
use Illuminate\Http\Request;

class PacienteController extends Controller
{

    public function datos(Request $request)
    {
        $paciente = new Regristro();
        $paciente->num_notificacion = $request->input('num_notificacion');
        $paciente->fecha_notificacion = $request->input('fecha_notificacion');
        $paciente->num_expediente = $request->input('num_expediente');
        $paciente->ap_paterno = $request->input('ap_paterno');
        $paciente->ap_materno = $request->input('ap-materno');
        $paciente->nombre = $request->input('nombre_paciente');  
        $paciente->calle = $request->input('calle');
        $paciente->num_exterior = $request->input('num_exterior');
        $paciente->num_interior = $request->input('num_interior');
        $paciente->colonia = $request->input('colonia');
        $paciente->entidad = $request->input('entidad');
        $paciente->Delegacion = $request->input('Delegación-municipio');
        $paciente->cp = $request->input('cp');
        $paciente->telefono = $request->input('telefono');
        $paciente->fecha_nacimiento = $request->input('fecha_nacimiento');
        $paciente->sexo = $request->input('sexo');
        $paciente->altura = $request->input('altura');
        $paciente->peso = $request->input('peso');
        $paciente->masa_corporal = $request->input('masa_corporal');
        $paciente->save();
        
        return redirect()->back()->with('success', 'User created successfully!');
    }
}
