<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Home;
use App\Http\Controllers\Logout;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Register;


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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [Dashboard::class, 'index']); //halaman
Route::post('/', [Dashboard::class, 'store']); //daftar
Route::post('/login', [Dashboard::class, 'authenticate']); //login
Route::post('/logout', [Dashboard::class, 'logout']); //logout
Route::get('/home', [Home::class, 'index']); //halaman home