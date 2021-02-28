@extends('layouts.admin.app')

@section('content')

    <div class="content-wrapper">
    <section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="row">
                <a href="{{route('propietario.create')}}" class="btn btn-lg btn-info">Crear</a>
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
                        @foreach($propietarios as $propietario)
                            <tr class="table-primary">
                                <td>{{ $propietario->documento }}</td>
                                <td>{{ $propietario->primer_nombre }}</td>
                                <td>{{ $propietario->segundo_nombre }}</td>
                                <td>{{ $propietario->apellido }}</td>
                                <td>{{ $propietario->direccion }}</td>
                                <td>{{ $propietario->telefono }}</td>
                                <td>{{ $propietario->ciudad }}</td>
                                <td>{{ $propietario->created_at }}</td>
                                <td>
                                    <form action="{{ route('propietario.destroy',$propietario->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('propietario.edit',$propietario->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>

                                        <a href="{{ route('propietario.show',$propietario->id) }}" class="btn btn-sm btn-info">Detalles</a>

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

