<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServicioRequest;
use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = Servicio::latest()->paginate(2);
        return view('servicios', compact('servicios'));
    }

    public function show($id)
    {
        $servicio = Servicio::findOrFail($id);
        return view('servicio', compact('servicio'));
    }

    public function create(){
        return view('create');
    }

    public function store(CreateServicioRequest $request){
        // Almacenamos en la BD
        Servicio::create($request->validated());
    
        // Redirección a la vista index
        return redirect()->route('servicios.index');
    }
}