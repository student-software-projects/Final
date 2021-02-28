<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function index(){
        $propietarios=Propietario::all();
        return view('propietario.index',compact('propietarios'));
    }

    //GET
    public function create(){
        return view('propietario.create');
    }

    public function store(Request $request){

        Propietario::create($request->all());
        return redirect()->route('propietario.index');
    }

    public function destroy($id){
        // SELECT * FROM entidad WHERE ID = ?
        // TRUE = DELETE FROM ENTIDAD WHERE ID = ?
        Propietario::find($id)->delete();
        return redirect()->route('propietario.index');
    }

    public function edit($id){
        $propietario = Propietario::findOrFail($id);
        return view('propietario.edit', compact('propietario'));
    }

    public function update(Request $request, $id){
        $datosexception = request()->except(['_token', '_method']);
        Propietario::where('id', '=', $id)->update($datosexception);
        return redirect()->route('propietario.index');
    }

    public function show($id){
        $propietario = Propietario::find($id);
        return view('propietario.show', compact('propietario'));
    }


}
