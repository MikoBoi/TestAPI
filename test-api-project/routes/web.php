<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiDataController;

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


Route::get('/fetch-orders', [ApiDataController::class, 'fetchOrders']);
Route::get('/fetch-sales', [ApiDataController::class, 'fetchSales']);
Route::get('/fetch-incomes', [ApiDataController::class, 'fetchIncomes']);
Route::get('/fetch-stocks', [ApiDataController::class, 'fetchStocks']);