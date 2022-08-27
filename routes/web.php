<?php

use App\Http\Controllers\DataController;
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

Route::get('/data', function () {
    return view('data');
});
Route::get('/data-ajax', function () {
    return view('data-ajax');
});

Route::post('data-ajax', [DataController::class, 'index'])->name('data-ajax');
