<?php


use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

//Get All Listings
Route::get ('/',[ListingController::class,'index']);

//Create Listing
Route::get('/listings/create',[ListingController::class,'create']);

//Store Listing
Route::post('/listings',[ListingController::class,'store']);

//Edit Listing
Route::get('/listings/{listing}/edit',[ListingController::class,'edit']);

//Update Listing
Route::put('/listings/{listing}',[ListingController::class,'update']);

//Delete Listing
Route::delete('/listings/{listing}',[ListingController::class,'destroy']);


//Show Register From
Route::get('/register/',[UserController::class,'create']);

//Store new Users
Route::post ('/users',[UserController::class,'store']);

//Logout Users
Route::post ('/logout',[UserController::class,'logout']);

//Login Users
Route::get ('/login',[UserController::class,'login']);

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
