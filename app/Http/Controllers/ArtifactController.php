<?php

namespace App\Http\Controllers;

use App\Models\Artifact;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ArtifactController extends Controller
{
    //Artifact Site page
    public function index()
    {

        return view('artifact.index', [
            'listings' => Artifact::latest()->filter(request(['tag', 'search']))->paginate(6)
            // 'listings' => Artifact::all()

        ]);
    }



    // Single tourist site page of product
    public function show(Artifact $listings)
    {
        return view('artifact.single', [
            'listings' => $listings
        ]);
    }



    // Show create form
    public function create()
    {
        return view('artifact.create');
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
        Artifact::create($formFields);

        return redirect('/artifact')->with('message', 'card created sucessfully!');
    }

    // Show list form
    public function listing()
    {
        return view('artifact.listing', [
            'listings' => Artifact::latest()->filter(request(['tag', 'search']))->paginate(6)
            // 'listings' => Tourist::all()

        ]);
    }


    // Show Edit Form
    public function edit(Artifact $listings)
    {

        return view('artifact.edit', ['listings' => $listings]);
    }



    // Update listing Data
    public function update(Request $request, Artifact $listings)
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

    public function destroy(Artifact $listing)
    {
        $listing->delete();
        return redirect('/artifact/listing')->with('message', 'Listing deleted sucessfully!');
    }
}
