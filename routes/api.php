<?php

use App\Http\Controllers\productController;
use App\Models\product;
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

// Route::get('/posts', function () {
//     return response()->json([
//         'posts' => [
//             [
//                 'title' => 'dummy box title'
//             ]
//         ]
//     ]);
// });

Route::get('/products', [productController::class, 'index']);

Route::post('/products', [productController::class, 'store']);
Route::post('/products/search/{name}', [productController::class, 'search']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
