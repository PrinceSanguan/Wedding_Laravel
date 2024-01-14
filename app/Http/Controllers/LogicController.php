<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LogicController extends Controller
{
    public function welcome() {
        return view ('welcome');
    }

    public function welcomePost(Request $request)
    {
        // Manually validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);
    
        // Check if user with the provided email already exists
        $existingUser = User::where('email', $request->input('email'))->first();
    
        if ($existingUser) {
            // User with the same email already exists, redirect to the error page
            return redirect()->route('error');
        }
    
        // Create a new user with the provided data
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);
    
        // You can perform additional actions if needed
    
        // Redirect to the success page
        return redirect()->route('success');
    }

    public function showParticipants()
{
    $users = User::all();
    $totalParticipants = $users->count();

    return view('success', compact('users', 'totalParticipants'));
}

public function error() {
    return view ('404error');
}
}
