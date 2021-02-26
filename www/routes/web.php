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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bugs', function() {
   return view('bugs');
});

Route::get('/bugs/{$id}', function() {
   return view('bug');
});

Route::get('/bugs', [BugController::class, 'bugs']);

Route::get('/bugs/{id}', [BugController::class, 'bug']);
