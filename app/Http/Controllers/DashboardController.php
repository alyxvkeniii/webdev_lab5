<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($userId)
    {
        // Example: Fetch user-specific data based on the user ID
        $user = User::find($userId); // Make sure to import the User model

        return view('dashboard', ['user' => $user]);
    }
}
