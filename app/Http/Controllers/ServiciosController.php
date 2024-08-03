<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServicioRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Events\ServicioSaved;
use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    public function __construct(){
        // $this->middleware('auth')->only('create','edit');
        $this->middleware('auth')->only('index','show');
    }

    public function index(){
        $servicios = Servicio::latest()->paginate(2);
        return view('servicios', compact('servicios'));
    }

    public function show($id){
        $servicio = Servicio::findOrFail($id);
        return view('servicio', compact('servicio'));
    }

    public function create(){
        return view('create', [
            'servicio' => new Servicio
        ]);
    }

    public function store(CreateServicioRequest $request){
        $servicio = Servicio::create($request->validated());
        if ($request->hasFile('image')) {
            $servicio->image = $request->file('image')->store('images', 'public');
            $servicio->save();
            
            $image = Image::make(storage::get($servicio->image))
                ->widen(600)
                ->limitColors(255)
                ->encode();

                //
                Storage::put($servicio->image, (string) $image);

                ServicioSaved::dispatch($servicio);
        }
        return redirect()->route('servicios.index')->with('estado', 'El Servicio fue creado correctamente');
    }    

    public function edit(Servicio $servicio){
        return view('edit', [
            'servicio' => $servicio
        ]);
    }

    public function update(CreateServicioRequest $request, Servicio $servicio){
        if($request->hasFile('image')) {
            Storage::delete($servicio->image);
            $servicio->fill( $request->validated() );
            $servicio->image = $request->file('image')->store('images');
            $servicio->save();

            $image = Image::make(storage::get($servicio->image))
                ->widen(600)
                ->limitColors(255)
                ->encode();

                //
                Storage::put($servicio->image, (string) $image);
                //
                ServicioSaved::dispatch($servicio);
        } else {
            $servicio->update( array_filter($request->validated()) );
        }

        return redirect()->route('servicios.show', $servicio)->with('estado', 'El Servicio fue actualizado correctamente');
    }

    public function destroy(Servicio $servicio){
        Storage::delete($servicio->image);
        $servicio->delete();

        return redirect()->route('servicios.index')->with('estado', 'El Servicio fue eliminado correctamente');
    }
}