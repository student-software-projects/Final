@extends('layouts.admin.app')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container">
                <div class="row"> q
                    <div class="col-md-12 mx-auto">
                        <div class="row">
                            <a href="{{route('conductor.create')}}" class="btn btn-lg btn-info">Crear</a>
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
                                    <th>OPCIONES</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($conductores as $conductor)
                                    <tr class="table-primary">
                                        <td>{{ $conductor->documento }}</td>
                                        <td>{{ $conductor->primer_nombre }}</td>
                                        <td>{{ $conductor->segundo_nombre }}</td>
                                        <td>{{ $conductor->apellido }}</td>
                                        <td>{{ $conductor->direccion }}</td>
                                        <td>{{ $conductor->telefono }}</td>
                                        <td>{{ $conductor->ciudad }}</td>
                                        <td>{{ $conductor->created_at }}</td>
                                        <td>
                                            <form action="{{ route('conductor.destroy',$conductor->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('conductor.edit',$conductor->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>

                                                <a href="{{ route('conductor.show',$conductor->id) }}" class="btn btn-sm btn-info">Detalles</a>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
