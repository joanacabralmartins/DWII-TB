<?php

use App\Http\Controllers\EspecialidadeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('templates.main')->with('titulo', "");
})->name('index');

Route::resource('cursos', 'CursoController');
Route::resource('disciplinas', 'DisciplinaController');
Route::resource('eixos', 'EixoController');
Route::resource('profs', 'ProfController');
Route::resource('docencia', 'DocenciaController');