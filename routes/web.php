<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\T_restaurantController;
use Illuminate\Http\Request;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('restaurant');
});
Route::resource('t_restaurants',T_restaurantController::class);

Route::get('/', function () {
    return view('detail');
});
// 
Route::get('/', function () {
    return view('Banhang.index');
});

Route::get('/detail', function () {
    return view('Banhang.detail');
});

