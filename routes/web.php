<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareersPagesController;
use App\Http\Controllers\JobBoardController;

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

Route::get('careers', [CareersPagesController::class, 'getIndex'])->name('careers__homepage');
Route::get('jobboard', [CareersPagesController::class, 'getJobBoard'])->name('available__jobs');

Route::post('jobboard/searchquery', [JobBoardController::class, 'getSearchQuery'])->name('search_all_jobs');