<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reaccion;
use App\Models\Regristro;

class ReaccionController extends Controller
{
    public function create(Request $request, string $paciente)
    {
        $paciente = Regristro::find($paciente);
        
        if (!$paciente) {
            return redirect()->route('paciente.create')->with('error', 'Paciente no encontrado');
        }
        return view('reaccion.create', ['paciente' => $paciente]);
    }
    
    public function data(Request $request, string $pacienteId)
    {
        $paciente = Regristro::findOrFail($pacienteId);
        $alergia = new Reaccion();
        $alergia->medicamentetos = $request->medicamentos;
        $alergia->alimentos = $request->alimentos;
        $alergia->otros = $request->otros;
        $alergia->fecha_inicio = $request->fecha_inicio;
        $alergia->consecuencia = $request->consecuencia;
        $alergia->descripcion = $request->descripcion;
        $alergia->save();
        $paciente->reaccion()->save($alergia);

        return redirect()->back()->with('success', 'User created successfully!');       
    }
}
