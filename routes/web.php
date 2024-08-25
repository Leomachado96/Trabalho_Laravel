<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;


Route::get('/', function () {
    return view('tarefas');
});

Route::get('/tarefas', [TarefaController::class, 'index']);

