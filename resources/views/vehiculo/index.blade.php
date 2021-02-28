@extends('layouts.admin.app')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="row">
                            <a href="{{route('vehiculo.create')}}" class="btn btn-lg btn-info">Crear</a>
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
                                    <th>OPCIONES</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($vehiculos as $vehiculo)
                                    <tr class="table-primary">
                                        <td>{{ $vehiculo->placa }}</td>
                                        <td>{{ $vehiculo->color }}</td>
                                        <td>{{ $vehiculo->marca }}</td>
                                        <td>{{ $vehiculo->tipo }}</td>
                                        <td>{{ $vehiculo->conductor->primer_nombre.' '.$vehiculo->conductor->apellido}}</td>
                                        <td>{{ $vehiculo->propietario->primer_nombre.' '.$vehiculo->propietario->apellido}}</td>


                                        <td>
                                            <form action="{{ route('vehiculo.destroy',$vehiculo->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('vehiculo.edit',$vehiculo->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>

                                                <a href="{{ route('vehiculo.show',$vehiculo->id) }}" class="btn btn-sm btn-info">Detalles</a>

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
