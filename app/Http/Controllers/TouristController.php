<?php

namespace App\Http\Controllers;

use App\Models\Tourist;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TouristController extends Controller
{
    //Tourist Site page
    public function index()
    {

        return view('tourist.index', [
            'listings' => Tourist::latest()->filter(request(['tag', 'search']))->paginate(6)
            // 'listings' => Tourist::all()

        ]);
    }





    // Single tourist site page of product
    public function show(Tourist $listings)
    {
        return view('tourist.single', [
            'listings' => $listings
        ]);
    }




    // Show list form
    public function listing()
    {
        return view('tourist.listing', [
            'listings' => Tourist::latest()->filter(request(['tag', 'search']))->paginate(6)
            // 'listings' => Tourist::all()

        ]);
    }



    // Show create form
    public function create()
    {
        return view('tourist.create');
    }


    // Store listing Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => ['required', Rule::unique('tourists', 'title')],
            'price' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'details' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        if ($request->hasFile('slider_one')) {
            $formFields['slider_one'] = $request->file('slider_one')->store('logos', 'public');
        }
        if ($request->hasFile('slider_two')) {
            $formFields['slider_two'] = $request->file('slider_two')->store('logos', 'public');
        }
        if ($request->hasFile('slider_three')) {
            $formFields['slider_three'] = $request->file('slider_three')->store('logos', 'public');
        }
        if ($request->hasFile('slider_four')) {
            $formFields['slider_four'] = $request->file('slider_four')->store('logos', 'public');
        }
        Tourist::create($formFields);

        return redirect('/tourist')->with('message', 'card created sucessfully!');
    }





    // Show Edit Form
    public function edit(Tourist $listings)
    {

        return view('tourist.edit', ['listings' => $listings]);
    }




    // Update listing Data
    public function update(Request $request, Tourist $listings)
    {
        $formFields = $request->validate([

            'price' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'details' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        if ($request->hasFile('slider_one')) {
            $formFields['slider_one'] = $request->file('slider_one')->store('logos', 'public');
        }
        if ($request->hasFile('slider_two')) {
            $formFields['slider_two'] = $request->file('slider_two')->store('logos', 'public');
        }
        if ($request->hasFile('slider_three')) {
            $formFields['slider_three'] = $request->file('slider_three')->store('logos', 'public');
        }
        if ($request->hasFile('slider_four')) {
            $formFields['slider_four'] = $request->file('slider_four')->store('logos', 'public');
        }
        $listings->update($formFields);

        return redirect('/tourist')->with('message', 'listing updated sucessfully!');
    }

    public function destroy(Tourist $listing)
    {
        $listing->delete();
        return redirect('tourist/listing')->with('message', 'Listing deleted sucessfully!');
    }
}
