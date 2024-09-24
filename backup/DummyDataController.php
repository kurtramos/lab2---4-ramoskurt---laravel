<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyDataController extends Controller
{
    public function index()
    {
        // Define some dummy data
        $dummyData = [
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'phone' => '(123) 456-7890',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'phone' => '(987) 654-3210',
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'phone' => '(555) 123-4567',
            ],
        ];

        // Pass the dummy data to the view
        return view('dummy-data', ['data' => $dummyData]);
    }
}
