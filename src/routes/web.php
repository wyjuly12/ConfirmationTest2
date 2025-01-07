<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductContorller;

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


Route::prefix('products')->group(function(){
    Route::get('/' , [ProductController::class ,'index']);
    Route::get('/{:productId}' , [ProductController::class , 'detail']);
    Route::post('/{:productId}/update' , [ProductController::class , 'update']);
    Route::get('/register' , [ProductController::class , 'register']);
    Route::post('/products/search' , [ProductController::class , 'search']);
    Route::post('/{:productId}/delete' , [ProductController::class , 'delete']);   
});



