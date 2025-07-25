<?php

use App\Http\Controllers\ActualityController;
use App\Http\Controllers\ManagerController;
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


// Define a route group for the frontend 
Route::name('front.')->group(function () {
    Route::get('/', [ManagerController::class, 'Welcome'])->name('welcome');
    Route::get('/a-propos', [ManagerController::class, 'About'])->name('about');
    Route::get('/nos-metiers', [ManagerController::class, 'OurJobs'])->name('our-jobs');
    Route::get('/nos-references', [ManagerController::class, 'OurReferences'])->name('our-references');
    Route::get('/actualities', [ManagerController::class, 'showActualities'])->name('actualities');
    Route::get('/actualities/{item_id}/{slug}', [ActualityController::class, 'showActuality'])->name('actuality.show');
});

