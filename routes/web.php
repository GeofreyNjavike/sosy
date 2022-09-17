<?php

use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Service;
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



Route::get('/', [WelcomeController::class, 'index']);

Route::get('/service/{id}', [WelcomeController::class, 'service'])->name('service');
Route::get('/team', [WelcomeController::class, 'team'])->name('team');
Route::get('/contact-us', [WelcomeController::class, 'contact'])->name('contact-us');

Route::get('/dashboard', function () {
    $list =  Service::all();
    return view('dashboard', compact('list'));
})->middleware(['auth'])->name('dashboard');



Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::post('services/create', [ServicesController::class, 'create'])->name('services/create');
Route::GET('editService/{id}', [ServicesController::class, 'edit'])->name('edit');
Route::post('services/update/{id}', [ServicesController::class, 'update'])->name('update');

Route::get('teams', [TeamController::class, 'index'])->name('teams');
Route::post('teams/create', [TeamController::class, 'store'])->name('teams/create');

require __DIR__ . '/auth.php';
