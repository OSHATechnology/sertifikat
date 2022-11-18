<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
Route::get('/page1', function () {
    return view('sertifikat.page1');
});
Route::get('/page3', function () {
    return view('sertifikat.page3');
});
Route::get('/page4', function () {
    return view('sertifikat.page4');
});
// Route::get('/sertifikat', [Controller::class, 'cetak']);