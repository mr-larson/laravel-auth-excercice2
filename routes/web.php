<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ChiffreController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TemoignageController;
use App\Models\Chiffre;
use App\Models\Hero;
use App\Models\Service;
use App\Models\Temoignage;
use App\Models\About;
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
    $heros = Hero::all();
    $abouts = About::all();
    $chiffres = Chiffre::all();
    $temoignages = Temoignage::all();
    $services = Service::all();
    return view('home', compact('chiffres', 'temoignages', 'services',"abouts", "heros"));
});

Route::get('/dashboard', function () {
    $heros = Hero::all();
    $abouts = About::all();
    $chiffres = Chiffre::all();
    $temoignages = Temoignage::all();
    $services = Service::all();
    return view('dashboard', compact('chiffres', 'temoignages', 'services',"abouts", "heros"));
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

//Hero
Route::resource("/hero", HeroController::class);

//About
Route::resource("/about", AboutController::class);

//Chiffre
Route::resource("/chiffre", ChiffreController::class);

//Service
Route::resource("/service", ServiceController::class);

//Temoignage
Route::resource("/temoignage", TemoignageController::class);

