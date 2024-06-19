<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController;

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

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController');
});

Route::group(['namespace'=>'Admin', 'prefix'=>'admin'], function() {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController');
    });

    Route::group(['namespace' => 'Category', 'prefix'=>'categories'], function () {
        Route::get('/', 'IndexController');
        // для теста роута
        // Route::get('/', function(){
        //     return 3333;
        // });

    });

});

// --- Если без namespace в laravel10/app/Providers/RouteServiceProvider.php
// Route::group(['namespace' => 'Main'], function () {
//     Route::get('/', [IndexController::class, '__invoke']);
// });
// --------------------------------------------------------------------------

Auth::routes();


