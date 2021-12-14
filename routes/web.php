<?php

use App\Http\Controllers\Admin\InvoicesController;
use App\Http\Controllers\Admin\ProductController;
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


Route::group(['prefix' => 'categories'], function () {


    Route::get('/create',[ ProductController::class, 'create'])->name('admin.categories.create');
    Route::post('/store',[ ProductController::class, 'store'])->name('admin.categories.store');

    });

    Route::group(['prefix' => 'invoices'], function () {


        Route::get('/create',[ InvoicesController::class, 'create_invoice'])->name('admin.invoices.create');
        Route::post('/store',[ InvoicesController::class, 'store_invoice'])->name('admin.invoices.store');

        });
