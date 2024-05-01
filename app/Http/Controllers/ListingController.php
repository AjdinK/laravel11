<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index () {
        return view ('/listings.index',
        [
            'listings' => Listing::All(),
        ]);
    }

    public function show (Listing $listing) {
        return view ('/listings.show' , [
            'listing' => $listing,
        ]);
    }

    public function show2 ($id){
        $data = Listing::find($id);
        if ($data){
            return view ('/listings.show',
            [
                'listing' => $data,
            ]);
        }
    }

    //to show single listing
    public function show3 ($id) {
        $data = Listing::find($id);
        if ($data){
            return view ('listing',[
                'listing' => $data
            ]);}

        else {
            abort('404');
        }
    }
}
