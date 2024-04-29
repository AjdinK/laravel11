<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //to show all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::All()
        ]);
    }

    //to show single listing
    public function show (int $id) {
        $data = Listing::find($id);
        if ($data){
            return view ('listings.show',[
                'listing' => $data
            ]);}

        else {
            abort('404');
        }
    }

    //to show single listing
    // public function show(Listing $listing) {
    //     return view('listing', [
    //                 'listing'=> $listing
    //             ]);
    // }

}
