<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    /**
     * Display the user home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }
}
