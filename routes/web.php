<?php

use Illuminate\Support\Facades\Route;

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
// Homepgae
Route::get('/', function () {
    return redirect()->route('admin-dashboard');
});

// Dashboard
Route::prefix('dashboard')
        ->middleware(['auth:sanctum','admin'])
        ->group(function(){
            Route::get('/',[DashboardController::class,'index'])->name('admin-dashboard');

        });


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
