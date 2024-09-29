<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // If the user is not authenticated, redirect to login
        if (!$user) {
            return redirect('/login');
        }

        // If the user is an admin, continue
        if ($user->role === 'admin') {
            return $next($request);
        }

        // If not an admin, redirect to user dashboard
        return redirect('/user/dashboard');
    }
}
