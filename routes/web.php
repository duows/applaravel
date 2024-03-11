<?php

//deve inserir a referencia aqui para conseguir usar o controller
use App\Http\Controllers\AutorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Chamando rota para usar o controller.
//Listar geral
Route::get('/autor/index',[AutorController::class,'index'])->name('autor.index');

//Criar
Route::get('/autor/create',[AutorController::class,'create'])->name('autor.create');

//Editar
Route::get('/autor/edit/{id}',[AutorController::class,'edit'])->name('autor.edit');


//Deletar
Route::get('/autor/destroy/{id}',[AutorController::class,'destroy'])->name('autor.destroy');

//Listar com id
Route::get('/autor/show/{id}',[AutorController::class,'show'])->name('autor.show');

Route::get('/autor/delete/{id}',[AutorController::class,'delete'])->name('autor.delete');

Route::post('/autor/update/{id}',[AutorController::class,'update'])->name('autor.update');
Route::post('/autor/store',[AutorController::class,'store'])->name('autor.store');
Route::post('/autor/destroy/{id}',[AutorController::class,'destroy'])->name('autor.destroy');