@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                    <form action="{{ route('vehiculo.update',$vehiculos->id) }}" method="post">

                        @csrf
                        {{method_field('PATCH')}}

                        <h3 class="mb-5">Editar Vehiculo</h3>

                        <div class="form-group mt-5">
                            <label for="conductor_id">Conductores</label>
                            <select name="conductor_id" id="conductor_id" class="form-control" required>
                                <option value="">Seleccionar...</option>
                                @foreach($conductores as $conductor)
                                    <option value="{{ $conductor->id }}">{{ $conductor->primer_nombre.' '.$conductor->apellido}}</option>
                                @endforeach
                            </select>
                            <label for="propietario_id">Propietarios</label>
                            <select name="propietario_id" id="propietario_id" class="form-control" required>
                                <option value="">Seleccionar...</option>
                                @foreach($propietarios as $propietario)
                                    <option value="{{ $propietario->id }}">{{ $propietario->primer_nombre.' '.$propietario->apellido}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="placa">PLACA:</label>
                            <input name="placa" id="placa" type="text" class="form-control" value="{{$vehiculos->placa}}">
                        </div>

                        <div class="form-group">
                            <label for="color">COLOR:</label>
                            <input name="color" id="color" type="text" class="form-control" value="{{$vehiculos->color}}">
                        </div>

                        <div class="form-group">
                            <label for="marca">MARCA:</label>
                            <input name="marca" id="marca" type="text" class="form-control" value="{{$vehiculos->marca}}">
                        </div>

                        <div class="form-group">
                            <label for="tipo">TIPO:</label>
                            <input name="tipo" id="tipo" type="text" class="form-control" value="{{$vehiculos->tipo}}">
                        </div>


                        <input class="btn btn-success my-3" type="submit" value="Actualizar vehiculo">

                    </form>

                </div>
            </div>
        </div>

@endsection
