<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use App\Models\Propietario;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index(){
        $vehiculos=Vehiculo::all();
        return view('vehiculo.index',compact('vehiculos'));
    }
    //GET
    public function create(){
        $propietarios = Propietario::all();
        $conductores = Conductor::all();
        return view('vehiculo.create', compact('propietarios', 'conductores'));
    }
    public function store(Request $request){
        Vehiculo::create($request->all());
        return redirect()->route('vehiculo.index');
    }

    public function destroy($id){
        Vehiculo::find($id)->delete();
        return redirect()->route('vehiculo.index');
    }

    public function edit($id){
        $vehiculos = Vehiculo::findOrFail($id);
        $propietarios = Propietario::all();
        $conductores = Conductor::all();
        return view('vehiculo.edit', compact('vehiculos','propietarios', 'conductores'));
    }

    public function update(Request $request, $id){
        $datosexception = request()->except(['_token', '_method']);
        Vehiculo::where('id', '=', $id)->update($datosexception);

        return redirect()->route('vehiculo.index');

    }

    public function show($id){
        $vehiculo = Vehiculo::find($id);
        $propietario = Propietario::all();
        $conductor = Conductor::all();
        return view('vehiculo.show', compact('vehiculo','propietario','conductor'));
    }
}
