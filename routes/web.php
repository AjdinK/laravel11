<?php


use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

//Get All Listings
Route::get ('/',[ListingController::class,'index']);

//Create Listing
Route::get('/listings/create',[ListingController::class,'create']);

//Store Listing
Route::post('/listings',[ListingController::class,'store']);

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
