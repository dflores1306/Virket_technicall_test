<?php
ini_set('max_execution_time', 300);
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('thankyou', function () {
    return view('thankyou');
});

Route::post('add-join', [App\Http\Controllers\JoinController::class, 'addJoin'])->name('add-join');

