<?php

use App\Http\Controllers\TestPDF;
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
    return view('welcome');
});

Route::get('/bot', [TestPDF::class, 'bot']);
Route::get('/psx_son', [TestPDF::class, 'psx_son']);
Route::get('/pxk_son', [TestPDF::class, 'pxk_son']);
