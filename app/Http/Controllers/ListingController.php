<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //

    // show single listing
    public function index()
    {
        // dye dump function
        // dd( request());
        return view('listings.index', [
            // 'heading' => 'Latest Listings',
            'listings' => Listing::all()->filter(),
        ]);
    }

    // show all listing
    public function show(Listing $id)
    {
        return view('listings.show', [
            'listing' => $id
        ]);
    }

    // show create form
    public function create()
    {
        return view('listings.create');
    }

    // store listing data
    public function store(Request $request)
    {
        // add form with validation
        $formFields = $request->validate([
            'jobtitle' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',

        ]);

        if($request->hasFile('logo')){
            $formFields['logo']  = $request->file('logo')->store('logos');
        }

        Listing::create($formFields);

        return redirect('/')->with('message','successfully created');
    }

    // show edit form
    public function edit(Listing $listing){
        return view('listings.edit', ['listing' => $listing]);
    }
}
