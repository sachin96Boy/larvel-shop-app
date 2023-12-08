<?php

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

Route::get('/', function () {
    return view('welcome', [
        'heading'=> 'Latest Listings',
        'listings' => [
            [
                'id'=>1,
                'title'=>'Listing one',
                'description'=>'This is desciption 1'
            ],
            [
                'id'=>2,
                'title'=>'Listing two',
                'description'=>'This is desciption 2'
            ],
        ]
    ]);
});

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
