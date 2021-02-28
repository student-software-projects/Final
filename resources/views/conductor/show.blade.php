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
                                    <th>DOCUMENTO</th>
                                    <th>PRIMER NOMBRE</th>
                                    <th>SEGUNDO NOMBRE</th>
                                    <th>APELLIDOS</th>
                                    <th>DIRECCION</th>
                                    <th>TELEFONO</th>
                                    <th>CIUDAD</th>
                                    <th>FECHA CREACION</th>
                                    <th>FECHA ACTUALIZACION</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="table-primary">
                                    <td>{{ $conductor->documento }}</td>
                                    <td>{{ $conductor->primer_nombre }}</td>
                                    <td>{{ $conductor->segundo_nombre }}</td>
                                    <td>{{ $conductor->apellido }}</td>
                                    <td>{{ $conductor->direccion }}</td>
                                    <td>{{ $conductor->telefono }}</td>
                                    <td>{{ $conductor->ciudad }}</td>
                                    <td>{{ $conductor->created_at }}</td>
                                    <td>{{ $conductor->updated_at }}</td>
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
