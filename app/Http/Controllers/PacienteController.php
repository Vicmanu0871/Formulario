<?php

namespace App\Http\Controllers;

use App\Models\Regristro;
use Illuminate\Http\Request;

class PacienteController extends Controller
{

    public function create()
    {
        return view('registros.create');
    }

    public function datos(Request $request)
    {
        $paciente = new Regristro();
        $paciente->num_notificacion = $request->num_notificacion;
        $paciente->fecha_notificacion = $request->fecha_notificacion;
        $paciente->num_expediente = $request->num_expediente;
        $paciente->ap_paterno = $request->ap_paterno;
        $paciente->ap_materno = $request->ap_materno;
        $paciente->nombre = $request->nombre_paciente;  
        $paciente->calle = $request->calle;
        $paciente->num_exterior = $request->num_exterior;
        $paciente->num_interior = $request->num_interior;
        $paciente->colonia = $request->colonia;
        $paciente->entidad = $request->entidad;
        $paciente->Delegacion = $request->delegaciónMunicipio;
        $paciente->cp = $request->cp;
        $paciente->telefono = $request->telefono;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->sexo = $request->sexo;
        $paciente->altura = $request->altura;
        $paciente->peso = $request->peso;
        $paciente->masa_corporal = $request->masa_corporal;
        $paciente->save();
        

        
        return redirect()->route('reaccion.create', ['paciente' => $paciente]);
    }
}
