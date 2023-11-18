<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\Home;
use App\Http\Controllers\admin\Authentication;

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
//     return view('welcome');
// });

Route::get('/', [Home::class, 'index'], 'index');
Route::get('/home', [Home::class, 'index'], 'index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/', [Authentication::class, 'index']);
});