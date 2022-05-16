<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

require __DIR__.'/auth.php';

Route::get('/profils', [ UserController::class, 'index' ]  )->name('profils');

Route::get('/entreprise/{id}', [ UserController::class, 'showentreprise' ])->name('entreprise.show');

Route::get('/profil/{id}', [ UserController::class, 'showprofil' ])->name('profil.show');

Route::get('/formation/{id}', [ UserController::class, 'showformation' ])->name('formation.show');

Route::get('/facture/{id}', [ UserController::class, 'showfacture' ])->name('facture.show');


Route::get('/contact', [ UserController::class, 'contact' ]  )->name('contact');


Route::get('/creerentreprise', [ UserController::class, 'creerentreprise' ])->name('entreprise.creer');

Route::post('/creerentreprise', [ UserController::class, 'storeentreprise' ])->name('entreprise.store');



Route::get('/creerformation', [ UserController::class, 'creerformation' ])->name('formation.creer');

Route::post('/creerformation', [ UserController::class, 'storeformation' ])->name('formation.store');




Route::get('/creerprofil', [ UserController::class, 'creerprofil' ])->name('profil.creer');


Route::post('/creerprofil', [ UserController::class, 'storeprofil' ])->name('profil.store');


Route::post('/creeruser', [ UserController::class, 'adduser' ])->name('user.creer');

Route::get('/creeruser', function () {
    return view('creeruser');
});


Route::get('/googleapi', function () {
    return view('googleapi');
});


Route::get('/creerfacture', [ UserController::class, 'creerfacture' ])->name('facture.creer');


Route::post('/creerfacture', [ UserController::class, 'addfacture' ])->name('facture.store');


