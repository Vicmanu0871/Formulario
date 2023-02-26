@extends('layouts.app')

<!-- Styles -->
<!-- Add any custom styles you need here -->
<!-- Content -->
@section('content')
  <div class="container">
    <h1>Reacción alérgica</h1>
    <form action="{{ route('reaccion.data', ['paciente' => $paciente]) }}" method="post">
      @csrf
        <input type="hidden" name="paciente_id" value="{{ $paciente->_id }}">

        <div class="row mb-3">
            <div class="col">
                <div class="form-outline">
                    <label for='alimentos'>Alimentos:</label>
                    <input type="text" class="form-control" name="alimentos" id="alimentos">
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label for="medicamentos">Medicamentos</label>
                    <input type="text" class="form-control" name="medicamentos" id="medicamentos">
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label for="otros">Otros</label>
                    <input type="text" class="form-control" name="medicamentos" id="medicamentos">
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <div class="form-outline">
                    <label for="fecha_inicio">Fecha de inicio</label>
                    <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" >
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label for="consecuencia">Consecuencia de la reacción: </label>
                    <input type="text" class="form-control" name="consecuencia" id="consecuencia" >
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label for="descripcion">Descripcion del evento (incluyendo datos y exploracion):</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
        </div>
        
        <div class="d-grid gap-2">
            <button class="btn btn-outline-info" type="submit">Guardar</button>
        </div>
    </form>
    </div>
    @endsection