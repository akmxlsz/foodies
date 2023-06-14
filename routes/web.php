<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Review2Controller;
use App\Http\Controllers\Review3Controller;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu');
});

//order part
Route::get('/add-order', function () {
    return view('add-order');
});

Route::get('order', [OrderController::class, 'index']);
Route::resource('addorder', OrderController::class);

//review part
Route::get('/add-review', function () {
    return view('add-review');
});

Route::get('review', [ReviewController::class, 'index']);
Route::resource('addreview', ReviewController::class);

//review2 part
Route::get('/add-review2', function () {
    return view('add-review2');
});

Route::get('review2', [Review2Controller::class, 'index']);
Route::resource('addreview2', Review2Controller::class);

//review3 part


Route::get('review3', [Review3Controller::class, 'index']);


//danish part
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
