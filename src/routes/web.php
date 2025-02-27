<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::prefix('products')->group(function(){
    Route::get('/' , [ProductController::class ,'index']);
    Route::get('/register' , [ProductController::class , 'register']);
    Route::post('/register' , [ProductController::class , 'create']);
    Route::get('/productId:{productId}' , [ProductController::class , 'detail']);
    Route::PATCH('/productId:{productId}/update' , [ProductController::class , 'update']);
    Route::get('/search' , [ProductController::class , 'search']);
    Route::DELETE('/productId:{productId}/delete' , [ProductController::class , 'delete']);
});



