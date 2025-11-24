<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class LogoutController extends Controller
{
    public function index(Request $request)
    {
        // Clear the online status cache
        Cache::forget('user-is-online-' . auth()->id());

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // Redirect to the login page with a success message
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
