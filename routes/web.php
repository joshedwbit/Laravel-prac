<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// all listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

// single listing
Route::get('/listings/{id}', function(string $id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

// can pass through data to view manually from here

// Route::get('/hello', function() {
//     return response('Hello World', 200);
// });

// Route::get('/posts/{id}', function($id) {
//     ddd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
//     return $request->name . ' ' . $request->city;
// });
// i.e. /search?name=John&city=London
// specifying an argument of the request class allows us to
// pull out params from url