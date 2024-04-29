<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/', [ListingController::class,'index']);

Route::get('/listings/{id}',[ListingController::class,'show']);
