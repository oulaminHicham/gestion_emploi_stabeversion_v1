<?php

use App\Http\Controllers\Emploi_tempeController;
use App\Http\Controllers\EtudientController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\SalleController;
use App\Models\Emploi_tempe;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// /////////////////////////////

//
Route::middleware(['auth'])->group(function () {
    Route::resource('/Groupes' , GroupeController::class);
    Route::resource('/Salles' , SalleController::class);
    Route::resource('/Filieres' , FiliereController::class);
    Route::resource('/Modules' , ModuleController::class);
    Route::resource('/Etudients' , EtudientController::class);
    Route::resource('/Emploi' , Emploi_tempeController::class);
});
Route::POST('/emploi/consulter', [Emploi_tempeController::class  , 'getEmploi'])->name('getEmploi');

Route::post('/login' , [LoginController::class , 'authenticate'])->name('adminPage');
Route::get('etudient/espace' , function(){
    return view('espaceEtudient');
})->name('espaceEtud');
/////
Route::get('/login' , function (){
    return view('Login.loginForm');
})->name('login');