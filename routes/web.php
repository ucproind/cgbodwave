<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CgbodController;
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

use Wave\Facades\Wave;

// Wave routes
Wave::routes();

Route::middleware(['auth'])->prefix('dashboard/cgbod')->group(function () {
    Route::get('/', [CgbodController::class, 'index'])->name('cgbod.index');
    Route::get('/projects/create', [CgbodController::class, 'create'])->name('cgbod.projects.create');
    Route::post('/projects', [CgbodController::class, 'store'])->name('cgbod.projects.store');
});
