<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CocheControlador;

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

Route::get('/dashboard', function (Request $request) {

    $user = $request->user();

    $datos = [
        'name' => $user->name
    ];

    return view('dashboard')->with(array_merge($datos));

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/insertar', [CocheControlador::class, 'showInsertForm'])->name('insertar');

Route::post('/insertar-coche',[CocheControlador::class, 'insertar'])->name('insertar-coche');

Route::get('/verCoches', [CocheControlador::class, 'showCoches'])->name('verCoches');

Route::get('/editar-coche/{id}', [CocheControlador::class, 'showEditForm'])->name('editar-coche');
Route::patch('/actualizar-coche/{id}', [CocheControlador::class, 'actualizar'])->name('actualizar-coche');
Route::delete('/eliminar-coche/{id}', [CocheControlador::class, 'eliminar'])->name('eliminar-coche');



require __DIR__ . '/auth.php';


