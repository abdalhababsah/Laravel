<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
{
    $users = User::all();
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
}
