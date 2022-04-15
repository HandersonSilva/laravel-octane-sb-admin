<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\{
    ComponentController,
    UtilitiesController,
    PagesController
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

Route::get('/', function () {
    return view('pages.dashboard.index');
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

/** Utilities */
Route::controller(PagesController::class)
    ->prefix('pages')
    ->name('pages.')
    ->group(function () {
        Route::get('login', 'login')->name('login');
        Route::get('register', 'register')->name('register');
        Route::get('forgot-passord', 'forgotPassord')->name('forgot-passord');
        Route::get('page-404', 'page404')->name('page-404');
        Route::get('blank', 'blank')->name('blank');
    });
