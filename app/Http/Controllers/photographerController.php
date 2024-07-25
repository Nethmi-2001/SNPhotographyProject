<?php

// app/Http/Controllers/PackageController.php

namespace App\Http\Controllers;

use App\Models\photographer;
//use App\Models\Category;
use Illuminate\Http\Request;

class photographerController extends Controller
{
    public function index()
    {
        return view('photographer');
    }

    public function home()
    {
        return view('photographerhome');
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show(photographer $photographer)
    {
       
    }

    public function edit(photographer $photographer)
    {
        
    }

    public function update(Request $request, photographer $photographer)
    {
        
    }

    public function destroy(photographer $photographer)
    {
        
    }
}

