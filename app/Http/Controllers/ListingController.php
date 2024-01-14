<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

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
}
