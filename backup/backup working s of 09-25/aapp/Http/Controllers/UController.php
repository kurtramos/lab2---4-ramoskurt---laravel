<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function dashboard()
    {
        return view('userdashboard');
    }

    public function about()
    {
        return view('userabout');
    }

    public function contact()
    {
        return view('usercontact');
    }

    public function brandOfCars()
    {
        return view('userbrand-of-cars');
    }

    public function rentACar()
    {
        return view('userrent-a-car');
    }

    public function reviewForms()
    {
        return view('userreviewforms');
    }
}
