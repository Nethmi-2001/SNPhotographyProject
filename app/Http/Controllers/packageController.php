<?php

// app/Http/Controllers/PackageController.php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Category;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::with('category')->get();
        return view('packages.index', compact('packages'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('packages.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'package_id' => 'required',
            'package_name' => 'required',
            
        ]);

        Package::create($request->all());

        return redirect()->route('packages.index')->with('success', 'Package created successfully.');
    }

    public function show(Package $package)
    {
        return view('packages.show', compact('package'));
    }

    public function edit(Package $package)
    {
        $categories = Category::all();
        return view('packages.edit', compact('package', 'categories'));
    }

    public function update(Request $request, Package $package)
    {
        $request->validate([
            'package_id' => 'required',
            'package_name' => 'required',
        ]);

        $package->update($request->all());

        return redirect()->route('packages.index')->with('success', 'Package updated successfully.');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index')->with('success', 'Package deleted successfully.');
    }
}

