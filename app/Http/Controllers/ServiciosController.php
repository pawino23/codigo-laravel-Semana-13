<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServicioRequest;
use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    public function index(){
        $servicios = Servicio::latest()->paginate(2);
        return view('servicios', compact('servicios'));
    }

    public function show($id){
        $servicio = Servicio::findOrFail($id);
        return view('servicio', compact('servicio'));
    }

    public function create(){
        return view('create',[
            'servicio' => new Servicio
        ]);
    }

    public function store(CreateServicioRequest $request){
        Servicio::create($request->validated());

        return redirect()->route('servicios.index');
    }

    public function edit(Servicio $servicio){
        return view('edit', [
            'servicio' => $servicio
        ]);
    }

    public function update(CreateServicioRequest $request, Servicio $servicio){
        $servicio->update($request->validated());

        return redirect()->route('servicios.show', $servicio);
    }

    public function destroy(Servicio $servicio){
        $servicio->delete();

        return redirect()->route('servicios.index');
    }
}