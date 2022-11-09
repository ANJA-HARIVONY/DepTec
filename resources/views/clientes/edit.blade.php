@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Cliente {{ $cliente->id }}</h1>
@stop

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('clientes.update',$cliente->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Fecha de Solicitud:</strong>
                    <input type='text' name="fechaSolicitud" class="form-control" value="{{ $cliente->fechaSolicitud }}" />
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Codigo ISP:</strong>
                <input type="text" name="codigoIsp" class="form-control" placeholder="codigo ISP" value="{{ $cliente->codigoIsp }}" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre del cliente" value="{{ $cliente->nombre }}">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Barrio:</strong>
                <input type="text" name="barrio" class="form-control" placeholder="Barrio" value="{{ $cliente->barrio }}" disabled>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Ubicacion:</strong>
                <input type="text" name="ubicacion" class="form-control" placeholder="Ubicacion" value="{{ $cliente->ubicacion }}" disabled>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Contacto:</strong>
                <input type="text" name="contacto" class="form-control" placeholder="Contacto" value="{{ $cliente->contacto }}" disabled>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Numero de Telefono:</strong>
                <input type="text" name="numTelefono" class="form-control" placeholder="Numero de telefono" value="{{ $cliente->numTelefono }}" disabled>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Velocidad:</strong>
                <input type="text" name="velocidad" class="form-control" placeholder="Velocidad" value="{{ $cliente->velocidad }}">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Type de Conexion:</strong>
                <input type="text" name="typoConexion" class="form-control" placeholder="Prueba/Confirmado.." value="{{ $cliente->typoConexion }}">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Referencia:</strong>
                <input type="text" name="referencia" class="form-control" placeholder="Refercenia" value="{{ $cliente->referencia }}">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Prioridad:</strong>
                <input type="text" name="prioridad" class="form-control" placeholder="Prioridad" value="{{ $cliente->prioridad }}">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Antena:</strong>
                <input type="text" name="antena" class="form-control" placeholder="antena" value="{{ $cliente->antena }}">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Router:</strong>
                <input type="text" name="router" class="form-control" placeholder="Router" value="{{ $cliente->router }}">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Instalador:</strong>
                <input type="text" name="instalador" class="form-control" placeholder="instalador" value="{{ $cliente->instalador }}">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Status:</strong>
                <input type="text" name="status" class="form-control" value="1">
            </div>
        </div>
        <strong>Fecha de Instalacion:</strong>
        <div class='input-group date' id='datepicker'>
            <input type='text' name="fechaInstalacion" class="form-control" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Observaciones:</strong>
                <textarea class="form-control" style="height:150px" name="observaciones" placeholder="Observvaciones">{{ $cliente->observaciones }}"</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


