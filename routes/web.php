<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogicController;

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

Route::get('/', [LogicController::class, 'welcome'])->name('welcome');
Route::post('/', [LogicController::class, 'welcomePost'])->name('welcome.post');

Route::get('/success', [LogicController::class, 'showParticipants'])->name('success');

Route::get('/404error', [LogicController::class, 'error'])->name('error');