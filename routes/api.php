<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);

// This does all the routes
Route::resource('products', ProductController::class);

Route::get('/products/search/{name}', [ProductController::class, 'search']);

// Auth
Route::group(['middleware'=> ['auth:sanctum']], function(){
    Route::get('/authTest', function(){
        return 'You are logged in';
    });
});

Route::post('/register', [AuthController::class, 'register']);