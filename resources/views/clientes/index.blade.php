@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Instalaciones</h1>
@stop
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="/css/admin_custom.css">
<style>
    th, td { white-space: nowrap; }
</style>
@endsection

@section('content')   
    @if ($message = Session::get('success'))
    <x-adminlte-callout theme="success" title="Success">
        {{ $message }}
    </x-adminlte-callout>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="table responsive">
        <table id="exemples" class="table table-responsive table-striped table-hover" style="width: 100%">
        <thead>
        <tr>
            <th>No</th>
            <th>Status</th>
            <th>Fecha de Solicitud</th>
            <th>Codigi ISP</th>
            <th>Nombre</th>
            <th>Ubicacion</th>
            <th>Velocidad</th>
            <th>Telefono</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>
                @if ($cliente->status === 0)
                <span class="badge bg-danger">Pendiente</span>
                        @if ($cliente->prioridad === "1")
                        <span class="badge bg-success">Normal</span>
                        @elseif($cliente->prioridad === "2")
                        <span class="badge bg-warning text-dark">Alta</span>
                        @else
                        <span class="badge bg-danger">Urgente</span>
                        @endif
                @else
                <span class="badge rounded-pill bg-info text-dark">Hecha</span>
                @endif
                
            </td>
            <td>{{ $cliente->fechaSolicitud }}</td>
            <td>{{ $cliente->codigoIsp }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->ubicacion }}</td>
            <td>{{ $cliente->velocidad }}</td>
            <td>{{ $cliente->numTelefono }}</td>
            {{--  <td>{{ $cliente->velocidad }}</td>
            <td>{{ $cliente->typoConexion }}</td>
            <td>{{ $cliente->referencia }}</td>
            <td>{{ $cliente->prioridad }}</td>
            <td>{{ $cliente->observaciones }}</td>
            <td>{{ $cliente->fechaInstalacion }}</td>
            <td>{{ $cliente->antena }}</td>
            <td>{{ $cliente->router }}</td>
            <td>{{ $cliente->instalador }}</td> --}}
            <td>
                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
    
                    <a class="btn btn-info" href="{{ route('clientes.show',$cliente->id) }}">Ver</a>
    
                    @if ($cliente->status === 0)
                    <a class="btn btn-primary" href="{{ route('clientes.edit',$cliente->id) }}">Instalar</a>
                    @else
                    @endif
                    @csrf
                    @method('DELETE')
                {{--<button type="submit" class="btn btn-danger">Delete</button>--}}
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Status</th>
                <th>Fecha de Solicitud</th>
                <th>Nombre</th>
                <th>Codigi ISP</th>
                <th>Ubicacion</th>
                <th>Contacto</th>
                <th>Telefono</th>
                <th width="280px">Action</th>
            </tr>
        </tfoot>
    </table>
    
    </div>
    </div>
    </div>
    {{--
    
    {!! $clientes->links('pagination::bootstrap-5') !!}
    
    --}}
@stop


@section('js')
    <script> console.log('Hi!'); </script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
    $('#exemples').DataTable({
        responsive:true,
        autowidth:false,
        scrollX: true,
        "order":[[0,'desc']],
        lengthMenu: [
            [25, 50, 100, -1],
            [25, 50, 100, 'All'],
        ],
    });
});
</script>
@stop