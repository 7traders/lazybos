<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LazybininkasController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






Route::group(['prefix' => 'lazybininkai'], function(){
    Route::get('', [LazybininkasController::class, 'index'])->name('lazybininkas.index');
    Route::get('create', [LazybininkasController::class, 'create'])->name('lazybininkas.create');
    Route::post('store', [LazybininkasController::class, 'store'])->name('lazybininkas.store');
    Route::get('edit/{lazybininkas}', [LazybininkasController::class, 'edit'])->name('lazybininkas.edit');
    Route::post('update/{lazybininkas}', [LazybininkasController::class, 'update'])->name('lazybininkas.update');
    Route::post('delete/{lazybininkas}', [LazybininkasController::class, 'destroy'])->name('lazybininkas.destroy');
    Route::get('show/{lazybininkas}', [LazybininkasController::class, 'show'])->name('lazybininkas.show');
 });
 
 