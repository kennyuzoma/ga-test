<?php

use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;

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

Route::resource('announcements', AnnouncementController::class);
Route::get('announcements/{announcement}/delete', [AnnouncementController::class, 'destroy'])->name('announcements.delete');
