<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings', [
        'headers' => 'Latest listings',
        'listings' => Listing::All()
    ]);
});

Route::get('/listings/{id}',function($id){
    $data = Listing::find($id);
    if ($data){
        return view ('listing',[
            'listing' => $data
        ]);
    }
    else {
        abort('404');
    }
});

// Route::get('listings/{id}',function(Listing $listing){
//     return view('listing', [
//         'listing'=> $listing,
//     ]);
// });
