<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareersPagesController;

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

// explicit routes
Route::get('careers', [CareersPagesController::class, 'getIndex'])->name('careers__homepage');
Route::get('jobboard', [CareersPagesController::class, 'getJobBoard'])->name('available__jobs');

Route::get('jobboard/searchquery', [App\Http\Controllers\JobBoardController::class, 'getSearchQuery'])->name('search_all_jobs');