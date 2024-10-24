<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ValidateController;
use Illuminate\Support\Facades\Route;


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


Route::get('/choose-language', [LanguageController::class, 'index']);
Route::post('/save-language', [LanguageController::class, 'store']);
Route::get('/show-saved- language', [LanguageController::class, 'showSavedLanguage']);




Route::get('/validation', [ValidateController::class, 'create']);
Route::post('/validation', [ValidateController::class, 'store'])->name('store.validation');