<?php

namespace App\Http\Controllers;

use App\Models\BookingNew;
use Illuminate\Http\Request;

class BookingNewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = BookingNew::all();
        return view('booking',compact('bookings'));
    }

    public function home()
    {
        return view('bookinghome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'package' => 'required|string|max:255',
        ]);

        // Create a new BookingNew record
        $bookingNew = new BookingNew();
        $bookingNew->client_name = $validated['name'];
        $bookingNew->client_contact = $validated['contact'];
        $bookingNew->client_email = $validated['email'];
        $bookingNew->date = $validated['date'];
        $bookingNew->location = $validated['location'];
        $bookingNew->package2 = $validated['package'];
        $bookingNew->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Details saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BookingNew $bookingNew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookingNew $bookingNew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookingNew $bookingNew)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookingNew $bookingNew)
    {
        //
    }
}
