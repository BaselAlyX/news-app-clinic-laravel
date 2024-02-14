<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

// Route::get('/', function () {
//     return view('pages.home');
// });
Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/major', function () {
    return view('pages.major');
})->name("major");

Route::get('/doctors', function () {
    return view('pages.doctors');
});
Route::get('/login', function () {
    return view('pages.login');
});
