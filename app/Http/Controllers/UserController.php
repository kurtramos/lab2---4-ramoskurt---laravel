<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(){
        // return 'Hello from index method in UserController Class;
        // return view('user-list', ["name" => "Kurt"]);
        $users = User::all();
        return view('user.user-list', compact('users'));
    }

    public function create() {
        return view('user.user-create');
    }
}
