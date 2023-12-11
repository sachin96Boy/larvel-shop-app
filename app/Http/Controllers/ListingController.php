<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //

    // show single listing
    public function index(){
        return view('listings.index', [
            // 'heading' => 'Latest Listings',
            'listings' => Listing::all(),
        ]);
    }

    // show all listing
    public function show(Listing $id){
        return view('listings.show', [
            'listing' => $id
        ]);
    }
}
