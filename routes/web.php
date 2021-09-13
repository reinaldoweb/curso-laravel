<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[EventController::class, 'index']); //Mostra todos os registros
Route::get('/events/create',[EventController::class, 'create'])->middleware('auth');//Cria registgro no banco com formulário
Route::get('dashboard', [EventController::class, 'dashboard'])->middleware('auth');
Route::get('/events/{id}',[EventController::class, 'show']);//Mostrar um resgitro especifico
Route::post('/events',[EventController::class, 'store']);//enviar dados para o banco
Route::delete('/events/{id}',[EventController::class, 'destroy'])->middleware('auth');//Deleta dados do banco
Route::get('/events/edit/{id}',[EventController::class, 'edit'])->middleware('auth');//Pega dados do banco
Route::put('/events/update/{id}',[EventController::class, 'update'])->middleware('auth');//Atualiza dados do banco
Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');//Participar do evento
Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');//Deletar participante do evento

Route::get('/contact', function () {
    return view('contact');
});



