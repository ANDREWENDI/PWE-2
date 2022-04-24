<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\x1Controller;
use App\Http\Controllers\x2Controller;
use App\Http\Controllers\x3Controller;
use App\Http\Controllers\x4Controller;
use App\Http\Controllers\x5Controller;
use App\Http\Controllers\x6Controller;
use App\Http\Controllers\x7Controller;
use App\Http\Controllers\x8Controller;
use App\Http\Controllers\x9Controller;
use App\Http\Controllers\x10Controller;

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

// route tanpa controller
Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', function() {
    return view('biodata');
});

Route::get('/testing', function() {
    return view('hai');
});

Route::get('/a', function() {
    return view('hai');
});

Route::get('/b', function() {
    return view('hai');
});

Route::get('/c', function() {
    return view('hai');
});

Route::get('/d', function() {
    return view('hai');
});

Route::get('/e', function() {
    return view('hai');
});

Route::get('/f', function() {
    return view('hai');
});

Route::get('/g', function() {
    return view('hai');
});

Route::get('/h', function() {
    return view('hai');
});

// route dengan controller
Route::get('/x1', [x1Controller::class, 'x']);
Route::get('/x2', [x2Controller::class, 'x']);
Route::get('/x3', [x3Controller::class, 'x']);
Route::get('/x4', [x4Controller::class, 'x']);
Route::get('/x5', [x5Controller::class, 'x']);
Route::get('/x6', [x6Controller::class, 'x']);
Route::get('/x7', [x7Controller::class, 'x']);
Route::get('/x8', [x8Controller::class, 'x']);
Route::get('/x9', [x9Controller::class, 'x']);
Route::get('/x10', [x10Controller::class, 'x']);