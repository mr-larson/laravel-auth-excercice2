<?php

use App\Http\Controllers\ChiffreController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TemoignageController;
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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


//Chiffre
Route::resource("/chiffre", ChiffreController::class);

//Chiffre
Route::resource("/service", ServiceController::class);

//Temoignage
Route::resource("/temoignage", TemoignageController::class);


