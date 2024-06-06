<?php

use App\Http\Controllers\ListingController;
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


//common resource route
//index - show all listings
//show - show single listing
//create - create form to create new listing
//store - store new listing
//edit - show form to edit new listing
//update - update new listong
//destroy - delete new listing


//All Listings
Route::get('/', [ListingController::class, 'index']);

//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);


//Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

//Show Edit Route
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);


//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);




Route:: get('/hello', function() {
    return response('<h1>Hello World</h1>', 200)
    ->header('content-Type', 'text/plain')
    ->header('foo' , 'bar');
});

Route:: get('/posts/{id}', function($id){
   return response('Post ' . $id);
})->where('id' , '[0-9]+');

Route :: get('/search' , function(Request $request){
 return($request -> name . ' ' . $request->city);
});

