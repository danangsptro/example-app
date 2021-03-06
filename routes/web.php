<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/', function () {
    return view('auth.login');
});

// group route with prefix "admin"
Route::prefix('admin')->group(function () {

    // group route with middleware "auth"
    Route::group(['middleware' => 'auth'], function() {

        // route dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
    });
});

// route category
// Route::resource('/category', CategoryController::class, ['as' => 'admin']);
Route::resource('/category', CategoryController::class, ['as' => 'admin']);
