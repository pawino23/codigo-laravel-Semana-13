<?php

use App\Http\Controllers\ServiciosController;

Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');

// Rutas para el controlador de servicios
Route::get('servicios', [ServiciosController::class, 'index'])->name('servicios.index');
Route::get('servicios/crear', [ServiciosController::class, 'create'])->name('servicios.create');
Route::get('servicios/{servicio}/editar', [ServiciosController::class, 'edit'])->name('servicios.edit');
Route::match(['put', 'patch'], 'servicios/{servicio}', [ServiciosController::class, 'update'])->name('servicios.update');
Route::post('servicios', [ServiciosController::class, 'store'])->name('servicios.store');
Route::get('servicios/{id}', [ServiciosController::class, 'show'])->name('servicios.show');
Route::delete('servicios/{servicio}', [ServiciosController::class, 'destroy'])->name('servicios.destroy');
Route::view('contacto', 'contacto')->name('contacto');