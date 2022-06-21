<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TemoignageController;

use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ContactUsFormController;

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

Route::get('/', [LoginController::class, 'home'])->name('welcome');

Route::get('/temoignage', function(){
    return view(view:'temoignage');
});


Route::get('/login', function(){
    return view(view:'login');
});
Route::get('/inscription', function(){
    return view(view:'inscription');
});
Route::post('/inscription', [\App\Http\Controllers\InscriptionController::class, 'Inscription'])->name('inscription');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'Login'])->name('login');
Route::get('/deconnexion', [\App\Http\Controllers\LoginController::class, 'Deconnexion']);
// Route::middleware('auth')->group(function(){
//     Route::get('/', function () {
//         return view('welcome');
//     });
// });



Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');


Route::post('/temoignage', [TemoignageController::class, 'creer'])->name('temoignage');
Route::get('/temoignage', [TemoignageController::class, 'montrer']);