<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {

        $usersQuery = User::query(); // Create a query builder instance

        // Check if pagination is needed
        if ($usersQuery) {
            $users = $usersQuery->paginate(5); // Paginate the results with 5 items per page
        } else {
            $users = $usersQuery->get(); // Get all results without pagination
        }

        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'Contact' => 'required',

            'email' => 'required',

            'password' => 'required',
            'RoleID' => 'required',

        ]);


        $newUser = User::create($data);
        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $User)
    {
        return view('admin.users.edit', ['User' => $User]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'RoleID' => 'required',
        ]);

        $user->update($data);
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('users.index'));
    }





    /////////////////////////////////////////////////////////////
    public function updateProfile(Request $request)
    {
        // Get the user ID from the session
        $userId = session('iduser');

        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|numeric',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Find the user by ID
        $user = User::find($userId);

        // Update user data
        $user->name = $request->input('name');
        $user->contact = $request->input('contact');
        $user->email = $request->input('email');

        // Update password if provided
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        // Save changes
        $user->save();

        // Redirect back or to a specific route
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
