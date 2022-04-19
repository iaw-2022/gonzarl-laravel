<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinishesController;
use App\Http\Controllers\DriversInTeamsController;

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

Route::resource('drivers', 'App\Http\Controllers\DriverController');
Route::resource('teams', 'App\Http\Controllers\TeamController');
Route::resource('races', 'App\Http\Controllers\RaceController');
Route::resource('users', 'App\Http\Controllers\UserController');
Route::resource('finishes', 'App\Http\Controllers\FinishesController');
Route::resource('drivers_in_teams', 'App\Http\Controllers\DriversInTeamsController');

Route::match(['get', 'post'], '/finishes/{id}/create_result', [FinishesController::class,'createResult']);
Route::match(['get', 'post'], '/drivers_in_teams/{id}/create_lineup', [DriversInTeamsController::class,'createLinup']);

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
