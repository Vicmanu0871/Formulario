@extends('layouts.app')

<!-- Styles -->



<!-- Content -->
@section('content')
  <div class="container">
    <h1>Registro de pacientes</h1>
    <form action="{{ route('paciente.datos') }}" method="post">
      @csrf
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <label for="num_notificacion">Numero de notificación</label>
            <input type="number" class="form-control" name="num_notificacion" id="num_notificacion" required>
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <label for="fecha_notificacion">Fecha de notificación</label>
            <input type="date" class="form-control" name="fecha_notificacion" id="fecha_notificacion" required>
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <label for="num_expediente">Numero de expédiente</label>
            <input type="number" class="form-control" name="num_expediente" id="num_expediente" required>
          </div>
        </div>
      </div>
      
      <div class="row mb-3">
        <div class="col">
          <div class="form-group">
            <label for="ap_paterno">Apellido paterno</label>
            <input type="text" class="form-control" name="ap_paterno" id="ap_paterno" required>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="ap_materno">Apellido materno</label>
            <input type="text" class="form-control" name="ap_materno" id="ap_materno" required>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
        </div>
      </div>
      
      
      <div class="row mb-3">
        <div class="col">
          <div class="form-group">
            <label for="calle">Calle</label>
            <input type="text" class="form-control" name="calle" id="calle" required>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="num_exterior">N° exterior</label>
            <input type="number" class="form-control" name="num_exterior" id="num_exterior" required>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="num_interior">N° interior</label>
            <input type="number" class="form-control" name="num_interior" id="num_interior">
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="cp">Código Postal</label>
            <input type="number" class="form-control" name="cp" id="cp" required>
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <div class="form-group">
            <label for="colonia">Colonia</label>
            <input type="text" class="form-control" name="colonia" id="coplonia" required>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="entidad">Entidad</label>
            <input type="text" class="form-control" name="entidad" id="entidad" required>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="Delegación-municipio">Delegación/Municipio</label>
            <input type="text" class="form-control" name="Delegación-municipio" id="Delegación-municipio" required>
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="number" class="form-control" name="telefono" id="telefono" required>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="fecha_nacimiento">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" required>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="peso">Peso</label>
            <input type="number" step="0.01" class="form-control" id="peso" name="peso" required>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="altura">Altura</label>
            <input type="number" step="0.01" class="form-control" id="altura" name="altura" required>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="sexo">Genero</label>
            <select  class="form-control" name="sexo" id="sexo" required>
                <option value="male">Masculino</option>
                <option value="female">Femenino</option>
          </div>
        </div>
      </div>
      <input type="reset" class="btn btn-primary btn-block mb-3" value="RESET"> 
      <input type="submit" class="btn btn-primary btn-block mb-3" value="NEXT">
    
    </form>
  </div>
@endsection