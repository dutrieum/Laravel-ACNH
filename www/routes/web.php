<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BugController;

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

Route::get('/', [BugController::class, 'bugs'])->name('bugs');

Route::get('/bugs/{id}', [BugController::class, 'bug'])->name('bug');
