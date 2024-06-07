<?php

namespace App\Http\Controllers;

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
}