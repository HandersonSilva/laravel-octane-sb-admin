<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\{ComponentController};

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

/** componet */
Route::controller(ComponentController::class)
    ->prefix('component')
    ->name('component.')
    ->group(function () {
        Route::get('buttons', 'buttons')->name('button');
        Route::get('cards', 'cards')->name('card');
    });
