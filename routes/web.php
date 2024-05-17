<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/registrar', function (){
    return view('assistants.assistants');
})->name('assistants.assistants');

Route::post('/assistants/create', [\App\Http\Controllers\AssistantController::class, 'store'])->name('assistants.create');


