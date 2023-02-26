<?php

use App\Http\Controllers\Api\PacienteController;
use App\Models\Reaccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::controller(PacienteController::class)->group(function(){
    Route::get('/pacientes', 'index');
    Route::post('/paciente', 'store');
    Route::put('/paciente/{id}', 'update');
    Route::delete('/paciente/{id}', 'destroy');
});
