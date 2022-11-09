@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Cliente</h1>
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

<form action="{{ route('clientes.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Fecha de Solicitud:</strong>
                <div class='input-group date' id='datepicker'>
                    <input type='text' name="fechaSolicitud" class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Codigo ISP:</strong>
                <input type="text" name="codigoIsp" class="form-control" placeholder="codigo ISP">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre del cliente">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Barrio:</strong>
                <input type="text" name="barrio" class="form-control" placeholder="Barrio">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Ubicacion:</strong>
                <input type="text" name="ubicacion" class="form-control" placeholder="Ubicacion">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Contacto:</strong>
                <input type="text" name="contacto" class="form-control" placeholder="Contacto">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Numero de Telefono:</strong>
                <input type="text" name="numTelefono" class="form-control" placeholder="Numero de telefono">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Velocidad:</strong>
                <input type="text" name="velocidad" class="form-control" placeholder="Velocidad">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Type de Conexion:</strong>
                <input type="text" name="typoConexion" class="form-control" placeholder="Prueba/Confirmado..">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Referencia:</strong>
                <input type="text" name="referencia" class="form-control" placeholder="Refercenia">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Prioridad:</strong>
                <!--<input type="text" name="prioridad" class="form-control" placeholder="Prioridad"> -->
                <select class="form-select" aria-label="Default select example" name="prioridad">
                    <option value="1">Normal</option>
                    <option value="2">Alta</option>
                    <option value="3">Urgente</option>
                  </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Observaciones:</strong>
                <textarea class="form-control" style="height:150px" name="observaciones" placeholder="Observvaciones"></textarea>
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