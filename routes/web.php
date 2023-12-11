<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\Home;
use App\Http\Controllers\admin\{Authentication, Dashboard};

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
Route::get('/test_cron', [Authentication::class, 'test_cron'], 'index')->name('test_cron');

//!! ************* Admin ************* !!
Route::get('admin', [Authentication::class, 'index'])->name('admin.login')->middleware('guest');
Route::post('admin/auth', [Authentication::class, 'auth'])->name('admin.auth');

Route::prefix('admin')->middleware('IsAdmin')->group(function () {
    //!!Authentication.
    Route::get('/home', [Dashboard::class, 'index'])->name('admin.dashboard');
});