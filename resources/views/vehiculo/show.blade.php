@extends('layouts.admin.app')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="row">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr class="table-dark">
                                    <th>PLACA</th>
                                    <th>COLOR</th>
                                    <th>MARCA</th>
                                    <th>TIPO</th>
                                    <th>CONDUCTOR</th>
                                    <th>PROPIETARIO</th>
                                    <th>FECHA CREACION</th>
                                    <th>FECHA ACTUALIZACION</th>
                                </tr>
                                </thead>
                                <tbody>
                                     <tr class="table-primary">
                                        <td>{{ $vehiculo->placa }}</td>
                                        <td>{{ $vehiculo->color }}</td>
                                        <td>{{ $vehiculo->marca }}</td>
                                        <td>{{ $vehiculo->tipo }}</td>
                                        <td>{{ $vehiculo->conductor->primer_nombre.' '.$vehiculo->conductor->apellido}}</td>
                                        <td>{{ $vehiculo->propietario->primer_nombre.' '.$vehiculo->propietario->apellido}}</td>
                                        <td>{{ $vehiculo->created_at }}</td>
                                        <td>{{ $vehiculo->updated_at }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
