<?php
// app/Http/Controllers/LocationController.php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    public function index()
    {
        return view('location');
    }

    public function home()
    {
        return view('locationhome');
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show(Location $location)
    {
        
    }

    public function edit(Location $location)
    {
        
    }

    public function update(Request $request, Location $location)
    {
        
    }

    public function destroy(Location $location)
    {
        
    }
}
