<?php

use App\Http\Controllers\ActualityController;
use App\Http\Controllers\Admin\ActualityController as AdminActualityController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactManager;
use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/fr');
});

Route::prefix('{locale}')
    ->where(['locale' => 'fr|en'])
    ->middleware(['web', \App\Http\Middleware\SetLocale::class])
    ->group(function () {
        Route::name('front.')->group(function () {
            Route::get('/', [ManagerController::class, 'welcome'])->name('welcome');
            Route::get('/a-propos', [ManagerController::class, 'about'])->name('about');
            Route::get('/equipes/{item_id}/biographie/{slug}', [ManagerController::class, 'getPersonBiographie'])->name('person-biographie');
            Route::get('/nos-metiers', [ManagerController::class, 'ourJobs'])->name('our-jobs');
            Route::get('/nos-references', [ManagerController::class, 'ourReferences'])->name('our-references');
            Route::get('/actualities', [ManagerController::class, 'showActualities'])->name('actualities');
            Route::get('/actualities/{item_id}/{slug}', [ActualityController::class, 'showActuality'])->name('actuality.show');
            Route::get('/contact', [ManagerController::class, 'contact'])->name('contact');
        });
        Route::post('/contact/sendMail', [ContactManager::class, 'sendMailContactForm'])->name('front.contact.send-mail');
    });

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->name('admin.')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('actualities', AdminActualityController::class)->except(['show']);

        Route::resource('team', TeamMemberController::class)
            ->parameters(['team' => 'member'])
            ->except(['show']);

        Route::get('account', [UserController::class, 'account'])->name('account');
        Route::put('account', [UserController::class, 'updateAccount'])->name('account.update');

        Route::resource('users', UserController::class)->except(['show']);
    });

require __DIR__.'/auth.php';
