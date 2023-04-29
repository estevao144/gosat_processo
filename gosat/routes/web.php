<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropostaController;

Route::get('/', function () {
    
    return view('home');
});

Route::get('/simulacao/{cpf}', [EmprestimoController::class, 'index']);
Route::get('/propostas', [PropostaController::class, 'index']);
Route::post('/simulacao', [HomeController::class, 'index']);





