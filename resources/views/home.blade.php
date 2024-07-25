<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'User Home Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Home Page</div>

                <div class="card-body">
                    Welcome to your home page, {{ Auth::user()->name }}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
