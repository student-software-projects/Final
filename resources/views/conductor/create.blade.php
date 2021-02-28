@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                    <form action="{{ route('conductor.store') }}" method="post">

                        @csrf
                        <h3 class="mb-5">Crear Conductor</h3>

                        <div class="form-group">
                            <label for="documento">Numero Documento:</label>
                            <input name="documento" id="documento" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="primer_nombre">Primer Nombre:</label>
                            <input name="primer_nombre" id="primer_nombre" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="segundo_nombre">Segundo Nombre:</label>
                            <input name="segundo_nombre" id="segundo_nombre" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <input name="apellido" id="apellido" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="direccion">Direccion:</label>
                            <input name="direccion" id="direccion" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad:</label>
                            <input name="ciudad" id="ciudad" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono:</label>
                            <input name="telefono" id="telefono" type="text" class="form-control">
                        </div>

                        <input class="btn btn-success my-3" type="submit" value="Guardar Conductor">

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
