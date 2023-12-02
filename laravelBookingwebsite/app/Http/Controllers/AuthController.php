<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    //
    public function signup(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->contact = $request->input('contact');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return redirect()->route('home');
    }


/////////////////////////////////////////////////////////////////////
public function login(Request $request)
{
        $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if ($user && $this->checkPassword($request->password, $user->password)) {

        session(['iduser' => $user->id]);
         session(['role' => $user->RoleID]);
        // Check the user's role and redirect accordingly
        switch ($user->RoleID) {
            case 1: // Admin
                return redirect()->route('users.index');
                break;

            case 2: // Laser
                return redirect()->route('house.index');
                break;

            case 3: // User
                return redirect()->route('home');
                break;

            default:
                // Handle unexpected role
                return redirect()->back()->withErrors(['email' => 'Invalid role']);
        }
    }

    // Authentication failed, redirect back with errors
    return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
}

private function checkPassword($inputPassword, $hashedPassword)
{
    // Check if the password needs rehashing
    if (password_needs_rehash($hashedPassword, PASSWORD_DEFAULT)) {
        // Rehash the password using Bcrypt
        $hashedPassword = bcrypt($inputPassword);
    }

    // Check if the password matches
    return password_verify($inputPassword, $hashedPassword);
}
public function logout()
{
    Auth::logout();
    session()->flush(); // This will destroy the entire session

    return redirect()->route('home');
}


}
