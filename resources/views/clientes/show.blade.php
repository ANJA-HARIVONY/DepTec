@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>DATA CLIENTE id: # {{ $cliente->id }}</h1>
@stop

@section('content')
<div class="card mb-3">
    <div class="card body" style="margin: 30px">
            <table class="table">
                <thead>
                    <tr>
                        <td>Name:</td>
                        <td>{{ $cliente->nombre }}
                            @if ($cliente->status === 0)
                            <span class="badge bg-danger">PENDIENTE</span>
                            @else
                            <span class="badge bg-success">HECHA</span>
                            @endif
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Feche de solicitud:</td>
                        <td>{{ $cliente->fechaSolicitud }}</td>
                    </tr>
                    <tr>
                        <td>Feche de Instalacion:</td>
                        <td>{{ $cliente->fechaInstalacion }}</td>
                    </tr>
                    <tr>
                        <td>Coigo ISP</td>
                        <td>{{ $cliente->codigoIsp }}</td>
                    </tr>
                    <tr>
                        <td>Barrio</td>
                        <td>{{ $cliente->barrio }}</td>
                    </tr>
                    <tr>
                        <td>Ubicacion</td>
                        <td>{{ $cliente->ubicacion }}</td>
                    </tr>
                    <tr>
                        <td>Contacto</td>
                        <td>{{ $cliente->contacto }}</td>
                    </tr>
                    <tr>
                        <td>Numero Telefono:</td>
                        <td>{{ $cliente->numTelefono }}</td>
                    </tr>
                    <tr>
                        <td>Velocidad</td>
                        <td>{{ $cliente->velocidad }}</td>
                    </tr>
                    <tr>
                        <td>Typo de Conexion:</td>
                        <td>{{ $cliente->typoConexion }}</td>
                    </tr>
                    <tr>
                        <td>Referencia</td>
                        <td>{{ $cliente->referencia }}</td>
                    </tr>
                    <tr>
                        <td>Prioridad</td>
                        <td>
                            @if ($cliente->prioridad === '1' )
                                <span class="badge bg-success">Normal</span>
                            @elseif ($cliente->prioridad === '2')
                                <span class="badge bg-warning text-dark">Alta</span>
                            @else
                                <span class="badge bg-danger">Urgente</span>
                            @endif 
                        </td>
                    </tr>
                    <tr>
                        <td>Antena</td>
                        <td><a href="//{{ $cliente->antena }}" class="link-primary">{{ $cliente->antena }}</a></td>
                    </tr>
                    <tr>
                        <td>Router</td>
                        <td><a href="//{{ $cliente->router }}" class="link-primary">{{ $cliente->router }}</a></td>
                    </tr>
                    <tr>
                        <td>Instalador</td>
                        <td>{{ $cliente->instalador }}</td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td>{{ $cliente->observaciones }}</td>
                    </tr>
                </tbody>
            </table>
    </div>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop