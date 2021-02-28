<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use Illuminate\Http\Request;

class ConductorController extends Controller
{
    public function index(){
        $conductores=Conductor::all();
        return view('conductor.index',compact('conductores'));
    }

    //GET
    public function create(){
        return view('conductor.create');
    }

    public function store(Request $request){

        Conductor::create($request->all());
        return redirect()->route('conductor.index');
    }

    public function destroy($id){
        // SELECT * FROM entidad WHERE ID = ?
        // TRUE = DELETE FROM ENTIDAD WHERE ID = ?
        Conductor::find($id)->delete();
        return redirect()->route('conductor.index');
    }

    public function edit($id){
        $conductor = Conductor::findOrFail($id);
        return view('conductor.edit', compact('conductor'));
    }

    public function update(Request $request, $id){
        $datosexception = request()->except(['_token', '_method']);
        Conductor::where('id', '=', $id)->update($datosexception);
        return redirect()->route('conductor.index');
    }

    public function show($id){
        $conductor = Conductor::find($id);
        return view('conductor.show', compact('conductor'));
    }

}
