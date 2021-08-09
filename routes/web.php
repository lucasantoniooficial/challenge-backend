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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::group(['prefix' => 'brands','namespace' => 'Brand', 'as' => 'brands.'], function(){
        Route::get('/',Index::class)->name('index');
        Route::get('/create',Create::class)->name('create');
        Route::get('/edit/{brand}',Edit::class)->name('edit');
    });

    Route::group(['prefix' => 'cars','namespace' => 'Car', 'as' => 'cars.'], function(){
        Route::get('/',Index::class)->name('index');
        Route::get('/create',Create::class)->name('create');
        Route::get('/edit/{car}',Edit::class)->name('edit');
    });
});
