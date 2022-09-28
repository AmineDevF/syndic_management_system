<?php

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

// Route::get('/dashboard', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('layouts.index');
});

// Route::get('/dashboard', function () {
//     return view('layouts.app');
// });
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/proprietaire', [App\Http\Controllers\ProprietairController::class, 'index'])->name('proprietaire');
// Route::get('/creat-Proprietaire', [App\Http\Controllers\ProprietairController::class, 'creat']);
// Route::get('/propriete', [App\Http\Controllers\ProprieteController::class, 'index'])->name('propriete');
// Route::get('/creat-propriete', [App\Http\Controllers\ProprieteController::class, 'creat']);
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'paneaux']);

Auth::routes();


// pannel controle withe role

Route::resource('propri', 'App\Http\Controllers\PropritaireController');