<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    /**
     * show all listings
     *
     * @return void
     */
    public function index()
    {
        return view('listings.index', [
            'heading' => 'Latest Listings',
            'listings' => Listing::all()
        ]);
        // can also use Listing::Latest to retrieve latest
    }

    /**
     * show single listing
     *
     * @return void
     */
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    /**
     * show create form
     */
    public function create()
    {
        return view('listings.create');
    }

    /**
     * handle form data
     *
     * @return void
     */
    public function store(Request $request)
    {
        // validation
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);
        // html fields need names for required to work properly

        Listing::create($formFields);

        return redirect('/');
    }
}
