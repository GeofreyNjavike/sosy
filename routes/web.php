<?php

use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::post('services/create', [ServicesController::class, 'create'])->name('services/create');
Route::GET('editService/{id}', [ServicesController::class, 'edit'])->name('edit');
Route::post('services/update/{id}', [ServicesController::class, 'update'])->name('update');

require __DIR__ . '/auth.php';
