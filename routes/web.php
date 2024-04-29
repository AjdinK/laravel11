<!-- <?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

// All Listings
Route::get('/', [ListingController::class,'index']);

// Show Create Form
Route::get('/listings/create',[ListingController::class,'create']);

// Store Listing Data
Route::post('/listings',[ListingController::class,'store']);

// Single listing
Route::get('/listings/{id}',[ListingController::class,'show']);
