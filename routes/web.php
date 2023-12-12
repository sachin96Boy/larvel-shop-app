<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ListingController::class, 'index'])->middleware('auth');

// Route::get('/hello', function(){
//     return response('<h1>hello world</h1>')
//         ->header('foo','bar');
// });
// // routes with wildcard ids
// Route::get('/posts/{id}', function($id){
//     return response('post ' . $id)
//         ->header('foo','bar');
// })->where('id', '[0-9]+');

// // make sure o pass the $sign
// // when using on functions
// Route::get('/search', function(Request $request){
//     dd($request-> name .' '. $request->city);
// });


// show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');


// store edit route
Route::get('/listings/${listing}/edit', [ListingController::class, 'edit'])->middleware('auth');


// TODO
// edit submit to update
Route::put('/listings/${listing}', [ListingController::class, 'update'])->middleware('auth');

// TODO
// edit submit to update
Route::delete('/listings/${listing}', [ListingController::class, 'delete'])->middleware('auth');



// importentmake sure you add dynamic routes like below to end so that it'll not look in with 
// more piority
// like we do in react

// single listing 
// search based on id
Route::get('/listings/{id}', [ListingController::class, 'show'])->middleware('auth');





// authentication and Registration on app
// show register /crate form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// store registered userss
Route::post('/users', [UserController::class, 'store']);


// logout user
Route::post('/logout', [UserController::class, 'logout']);



// we use name field to declare name for the route path
// so we can use this name inside route('name goes here')


// login user
Route::post('/login', [UserController::class, 'login'])->name('login')->middleware('guest');


// login user submit form
Route::post('/login/auth', [UserController::class, 'auth']);




// common resource routes

// index - show all listings
// show - show single listings
// create - show form to create new listings
// store - store new listings
// edit - show form to edit listings
// update - update listing
// delete - delete listing