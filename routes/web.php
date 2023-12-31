<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cron;
use App\Http\Controllers\front\{Home, Notification};
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

Route::get('/', [Home::class, 'index'], 'index');
Route::get('/home', [Home::class, 'index'], 'index')->name('home');

//!! ************* Notification ********** !!
Route::get('/notification-alert', [Notification::class, 'index'])->name('notification');
Route::post('/notification-alert', [Notification::class, 'store'])->name('notification.store');
Route::get('/cron', [Cron::class, 'schedule_run'])->name('schedule_run');
Route::get('/send-notification', [Authentication::class, 'sendNotification'], 'index')->name('sendNotification');

//!! ************* Admin ************* !!
Route::get('admin', [Authentication::class, 'index'])->name('admin.login')->middleware('guest');
Route::post('admin/auth', [Authentication::class, 'auth'])->name('admin.auth');

Route::prefix('admin')->middleware('IsAdmin')->group(function () {
    //!!Authentication.
    Route::get('/home', [Dashboard::class, 'index'])->name('admin.dashboard');
});