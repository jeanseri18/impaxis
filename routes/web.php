
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
    Route::get('/', [ManagerController::class, 'welcome'])->name('welcome');
    Route::get('/a-propos', [ManagerController::class, 'about'])->name('about');
    Route::get('/equipes/{item_id}/biographie/{slug}', [ManagerController::class, 'getPersonBiographie'])->name('person-biographie');
    Route::get('/nos-metiers', [ManagerController::class, 'ourJobs'])->name('our-jobs');
    Route::get('/nos-references', [ManagerController::class, 'ourReferences'])->name('our-references');
    Route::get('/actualities', [ManagerController::class, 'showActualities'])->name('actualities');
    Route::get('/actualities/{item_id}/{slug}', [ActualityController::class, 'showActuality'])->name('actuality.show');
    Route::get('/contact', [ManagerController::class, 'Contact'])->name('contact');
})->middleware('web');


// // Define a route group for the admin panel
// Route::middleware('auth')->name('admin.')->group(function () {
//     Route::get('/dashboard', function () {
//         // return view('admin.index');
//         return 'Admin Dashboard';
//     })->name('index');
    
//     // Actuality management routes
//     Route::get('/actualities', [ActualityController::class, 'index'])->name('actualities.index');
//     Route::get('/actualities/create', [ActualityController::class, 'create'])->name('actualities.create');
//     Route::post('/actualities', [ActualityController::class, 'store'])->name('actualities.store');
//     Route::get('/actualities/{id}/edit', [ActualityController::class, 'edit'])->name('actualities.edit');
//     Route::put('/actualities/{id}', [ActualityController::class, 'update'])->name('actualities.update');
//     Route::delete('/actualities/{id}', [ActualityController::class, 'destroy'])->name('actualities.destroy');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard')->prefix('admin');





// <?php

// use App\Http\Controllers\ProfileController;
// use Illuminate\Support\Facades\Route;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
