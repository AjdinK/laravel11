<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //to show All listing
    public function index () {
        return view ('/listings.index',
        [
            'listings' => Listing::latest()
            ->filter(request(['tags','search']))
            ->simplePaginate(10)
        ]);
    }

    public function create () {
        return view ('/listings.create');
    }

    public function store (Request $request){

        //  dd($request->file('logo') -> store());

        $formFileds = $request->validate([
            'title' => 'required',
            'company' => ['required' , Rule::unique('listings','company')],
            'location' => 'required',
            'website'=> 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required',
        ]);
        if ($request->hasFile('logo')){
            $formFileds['logo'] = $request->file('logo')->store('logos','public');
        }

        Listing::create($formFileds);

        return redirect('/')->with('message','Listing created successfully');
    }



    //to show single listing
    public function show (Listing $listing) {
        return view ('/listings.show' , [
            'listing' => $listing,
        ]);
    }





    // public function show2 ($id){
    //     $data = Listing::find($id);
    //     if ($data){
    //         return view ('/listings.show',
    //         [
    //             'listing' => $data,
    //         ]);
    //     }
    // }


     //to show single listing by id
    // public function show3 ($id) {
    //     $data = Listing::find($id);
    //     if ($data){
    //         return view ('listing',[
    //             'listing' => $data
    //         ]);}

    //     else {
    //         abort('404');
    //     }
    // }
}
