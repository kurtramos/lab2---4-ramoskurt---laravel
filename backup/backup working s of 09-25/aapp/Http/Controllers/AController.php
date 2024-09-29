<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AController extends Controller
{
    public function dashboard()
    {
        return view('admindashboard');
    }

    public function profile()
    {
        return view('adminprofile');
    }

    public function hobbies()
    {
        return view('adminhobbies');
    }

    public function favoriteMovies()
    {
        return view('adminfavorite-movies');
    }

    public function ownedCars()
    {
        return view('adminowned-cars');
    }

    public function carsForRent()
    {
        return view('admincars-for-rent');
    }

    public function quotationForCarRent()
    {
        return view('adminquotation-for-car-rent');
    }

    
}
