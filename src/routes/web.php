<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\{
    ComponentController,
    UtilitiesController,
    PagesController,
    ChartsController,
    TableController,
    UserController
};

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('pages.dashboard.index');
    });

    /** User */
    Route::controller(UserController::class)
        ->prefix('user')
        ->name('user.')
        ->group(function () {
            Route::get('/{id}', 'edit')->name('edit');
        });

    /** Componets */
    Route::controller(ComponentController::class)
        ->prefix('component')
        ->name('component.')
        ->group(function () {
            Route::get('buttons', 'buttons')->name('button');
            Route::get('cards', 'cards')->name('card');
        });

    /** Utilities */
    Route::controller(UtilitiesController::class)
        ->prefix('utilities')
        ->name('utilities.')
        ->group(function () {
            Route::get('colors', 'colors')->name('color');
            Route::get('borders', 'borders')->name('border');
            Route::get('animations', 'animations')->name('animation');
            Route::get('other', 'other')->name('other');
        });

    /** Pages */
    Route::controller(PagesController::class)
        ->prefix('pages')
        ->name('pages.')
        ->group(function () {
            Route::get('login', 'login')->name('login');
            Route::get('register', 'register')->name('register');
            Route::get('forgot-passord', 'forgotPassord')->name('forgot-passord');
            Route::get('page-404', 'page404')->name('page-404');
            Route::get('page-500', 'page500')->name('page-500');
            Route::get('blank', 'blank')->name('blank');
        });

    /** Charts */
    Route::controller(ChartsController::class)
        ->prefix('charts')
        ->name('charts.')
        ->group(function () {
            Route::get('charts', 'index')->name('index');
        });

    /** Table */
    Route::controller(TableController::class)
        ->prefix('table')
        ->name('table.')
        ->group(function () {
            Route::get('table', 'index')->name('index');
        });
});

require __DIR__.'/auth.php';
