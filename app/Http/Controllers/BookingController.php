<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //Tourist Site page
    public function index()
    {

        return view('booking.index');
    }

    // Show list form
    public function listing()
    {
        return view('booking.list', [
            'listings' => Booking::latest()->filter(request(['search']))->paginate(6)
            // 'listings' => Booking::all()

        ]);
    }

    public function destroy(Booking $listing)
    {
        $listing->delete();
        return redirect('/booking/listing')->with('message', 'Listing deleted sucessfully!');
    }

    public function view(Booking $listings)
    {

        return view('booking.view', ['listings' => $listings]);
    }
}