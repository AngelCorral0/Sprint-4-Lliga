<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PartidoController;


Route::get('/', [EquipoController::class,'index'])->name('equipos.index');
Route::get('/equipos', [EquipoController::class,'index'])->name('equipos.index');

Route::get('/equipos/create', [EquipoController::class, 'create'])->name('equipos.create');
Route::post('/equipos/create', [EquipoController::class, 'store'])->name('equipos.store');

Route::get('/equipos/{equipo}', [EquipoController::class, 'show'])->name('equipos.show');


Route::get('/equipos/edit/{equipo}', [EquipoController::class, 'edit'])->name('equipos.edit');
Route::patch('/equipos/{equipo}/update', [EquipoController::class, 'update'])->name('equipos.update');

Route::delete('/equipos/{equipo}/delete', [EquipoController::class, 'delete'])->name('equipos.delete');
