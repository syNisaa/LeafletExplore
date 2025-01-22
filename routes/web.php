<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PetaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/gempa', function () {
    return view('peta.gempa');
});

// Route::get('/home', function () {
//     return view('templateUser.index');
// });


Route::get('/',[PetaController::class, 'provinsi']);
Route::get('/exploreProvinsi',[PetaController::class, 'explore']);
Route::get('/bali',[PetaController::class, 'bali']);

Route::get('/peta',[PetaController::class, 'index']);

Route::get('/alldata',[PetaController::class, 'data']);

Route::get('/coba',[PetaController::class, 'coba']);

Route::get('/team', function () {
    return view('templateUser.team');
});
