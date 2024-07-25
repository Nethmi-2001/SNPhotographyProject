<?php

namespace App\Http\Controllers;

use App\Models\LocationNew;
use Illuminate\Http\Request;

class LocationNewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    
     public function index()
    {
        return view('location');
    }

    public function home()
    {
        return view('locationhome');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LocationNew $locationNew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LocationNew $locationNew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LocationNew $locationNew)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LocationNew $locationNew)
    {
        //
    }
}
