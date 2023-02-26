<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reaccion;
use App\Models\Regristro;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response; 

class PacienteController extends Controller
{
    public function index(){
        $pacientes = Regristro::with('reaccion');
        return response()->json(["result"=> $pacientes], Response::HTTP_OK);
    }
    
    public function store(Request $request){

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

        $alergia = new Reaccion();
        $alergia->medicamentetos = $request->medicamentos;
        $alergia->alimentos = $request->alimentos;
        $alergia->otros = $request->otros;
        $alergia->fecha_inicio = $request->fecha_inicio;
        $alergia->consecuencia = $request->consecuencia;
        $alergia->descripcion = $request->descripcion;
        $alergia->alergia_id = $paciente->id;
        $alergia->save(); 
        $paciente->load('reaccion');

        return response()->json(['result' => $paciente], Response::HTTP_CREATED);
    }

    public function update(Request $request, $id){
        $paciente = Regristro::findOrFail($request->id);
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

        $alergia = Reaccion::where('registro_id', $id)->firstOrFail();
        $alergia->medicamentetos = $request->medicamentos;
        $alergia->alimentos = $request->alimentos;
        $alergia->otros = $request->otros;
        $alergia->fecha_inicio = $request->fecha_inicio;
        $alergia->consecuencia = $request->consecuencia;
        $alergia->descripcion = $request->descripcion;
        $alergia->alergia_id = $paciente->id;
        $alergia->save();
        $paciente = Regristro::where('id', $id)->with('reaccion')->first();
        return response()->json(['ressult'=>$paciente], Response::HTTP_OK);
    }
    public function destroy($id){
        $paciente = Regristro::find($id);

        if ($paciente) {
            // Si se encuentra el paciente, se elimina
            $paciente->delete();
    
            // También se elimina su respectiva alergia, si existe
            if ($paciente->reaccion) {
                $paciente->reaccion->delete();
            }
    
            // Devolver respuesta exitosa
            return response()->json(['message' => 'Paciente eliminado correctamente'], Response::HTTP_OK);
        }
    }
}
