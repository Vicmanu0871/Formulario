@extends('layouts.plantilla')

@section('title', 'Registro del Paciente')

@section('content')
<form method="post" action="formulario">
        @csrf
        <label for="num_notification">Numero de notificación</label>
        <input type="number" name="num_notification" id="num_notification" required>

        <label for="fecha_notificacion">Fecha de notificación</label>
        <input type="date" name="fecha_notificacion" id="fecha_notificacion" required>

        <label for="num_expediente">Numero de expédiente</label>
        <input type="number" name="num_expediente" id="num_expediente" required>

        <label for="ap_paterno">Apellido paterno</label>
        <input type="text" name="ap_paterno" id="ap_paterno" required>

        <label for="ap_materno">Apellido materno</label>
        <input type="text" name="ap_materno" id="ap_materno" required>

        <label for="nombre_paciente">Nombre:</label>
        <input type="text" name="nombre_paciente" id="nombre_paciente" required>
        
        <label for="calle">Calle</label>
        <input type="text" name="calle" id="calle" required>

        <label for="num_exterior">N° exterior</label>
        <input type="number" name="num_exterior" id="num_exterior" required>
        
        <label for="num_exterior">N° exterior</label>
        <input type="number" name="num_interior" id="num_interior" required>

        <label for="colonia">Colonia</label>
        <input type="text" name="colonia" id="coplonia" required>

        <label for="entidad">Entidad</label>
        <input type="text" name="entidad" id="entidad" required>

        <label for="Delegación-municipio">Delegación/Municipio</label>
        <input type="text" name="Delegación-municipio" id="Delegación-municipio" required>
        
        <label for="cp">Código Postal</label>
        <input type="number" name="cp" id="cp" required>

        <label for="telefono">Teléfono</label>
        <input type="number" name="telefono" id="telefono" required>

        <label for="fecha_nacimiento">Fecha de nacimiento</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>

        <label for="peso">Peso</label>
        <input type="number" name="peso" id="peso" required>
    
        <label for="altura">Altura</label>
        <input type="number" name="altura" id="altura" required>
    
        <label for="sexo">Genero</label>
        <select name="sexo" id="sexo" required>
            <option value="male">Masculino</option>
            <option value="female">Femenino</option>
        </select>
    
        <input type="submit" value="Save">
    </form>

@endsection