@extends('layouts.app')

@section('content')

    <body>
        <div class="card">
            <div class="card-header">
                <h3>Expediente</h3>
            </div>
            <div class="card-footer">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead style="background-color: #17a2b8; color: #fff;">
                            <tr>
                                <th>ID</th>
                                <th>Descripcion</th>
                                <th>Archivo</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Vencimiento</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-expe">
                            @foreach ($expedientes as $expe)
                                <tr>
                                    <td>{{ $expe->id_expediente }}</td>
                                    <td>{{ $expe->descripcion }}</td>
                                    <td>{{ $expe->archivo }}</td>
                                    <td>{{ $expe->fecha_inicio }}</td>
                                    <td>{{ $expe->fecha_vencimiento }}</td>
                                    <td>
                                        <a class="btn btn-primary"
                                            href="{{ route('showExpediente', $expe->id_expediente) }}">
                                            Ver
                                        </a>
                                    </td>
                                <tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
@endsection
