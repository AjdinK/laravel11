<?php


use App\Models\Listing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use Illuminate\Routing\Controllers\Middleware;


//Get All Listings
Route::get ('/',[ListingController::class,'index']);

//Create Listing
Route::get('/listings/create',[ListingController::class,'create'])
->middleware('auth');

//Store Listing
Route::post('/listings',[ListingController::class,'store'])
->middleware('auth');

//Edit Listing
Route::get('/listings/{listing}/edit',[ListingController::class,'edit'])
->middleware('auth');

//Update Listing
Route::put('/listings/{listing}',[ListingController::class,'update'])
->middleware('auth');

//Delete Listing
Route::delete('/listings/{listing}',[ListingController::class,'destroy'])
->middleware('auth');

//Manage
Route::get('/listings/manage',[ListingController::class,'manage'])
->middleware('auth');

//Show Register From
Route::get('/register/',[UserController::class,'create'])
->middleware('guest');

//Store new Users
Route::post ('/users',[UserController::class,'store']);

//Logout Users
Route::post ('/logout',[UserController::class,'logout']);

//Show Login Form Users
Route::get ('/login',[UserController::class,'login'])
->name('login')
->middleware('guest');

//Login Users
Route::post ('/users/authenticate',[UserController::class,'authenticate']);


//Single listing
Route::get ('/listings/{listing}',[ListingController::class,'show']);




// Route::get ('listings/{listing}' , function (Listing $listing) {
//     return view ('listing' ,
//     [
//         'listing' => $listing,
//     ]);
// });


// Route::get ('listings/{id}', function ($id) {
//     $data = Listing::find($id);
//     if ($data){
//         return view ('listing' ,
//         [
//             'listing' => $data,
//         ]);
//     }
//     else
//         abort (404);
// });

// Route::get ('listings/{id}', function ($id) {
//     return view ('listing',
//     [
//         'listing' => Listing::find($id),
//     ]);
// });
