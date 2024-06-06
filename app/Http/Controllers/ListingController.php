<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
      //show all listings
      public function index(){
        // dd(request(('tag')));
        //simplePaginate
        return view('listings.index',  [
            'listings' => Listing :: latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }


    //show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //Show Create Form
    public function create(){
        return view('listings.create');
    }

    //Store Listing Data
    public function store(Request $request){
    //   dd($request->all());
    // dd($request->file('logo')->store());
    $formFields = $request->validate([
       'title' => 'required',
       'company' =>['required', Rule::unique('listings','company' )],
       'location' => 'required',
       'website' => 'required',
       'email'=> ['required', 'email'],
       'tags'=>'required',
       'description'=> 'required'
    ]);

    if($request->hasFile('logo')){
        $formFields['logo']= $request->file('logo')->store('logos', 'public');
    }

    Listing:: create($formFields);

    // Session:: flash('message', 'Listing Created');

    return redirect('/')->with('message', 'Listing Created Successfully!');
    
    }
       

    //Show Edit Form
   public function edit(Listing $listing){
    // dd($listing->title);
    return view('listings.edit', ['listing' => $listing]);
   }
}
