@extends('layout.master')

@section('content')



    <div class="flex">

        <div class="w-full p-8">
            <div class="flex justify-between mb-8">
                <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md mr-4">Add User</a>
                <a href="{{ route('users.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Manage Users</a>
            </div>

            <div class="bg-white rounded-md shadow-md p-8">
                <h2 class="text-2xl font-bold mb-4">Add User</h2>

                <form action="{{ route('users.store') }}" method="post" class="space-y-4">
                    @csrf
                    @method('post')
                    <div>
                        <label class="block mb-1">Username</label>
                        <input type="text" name="name" class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Username">
                    </div>
                    <div>
                        <label class="block mb-1">Email</label>
                        <input type="email" name="email" class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Email">
                    </div>
                    <div>
                        <label class="block mb-1">Password</label>
                        <input type="password" name="password" class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Password">
                    </div>
                    <div>
                        <label class="block mb-1">Contact</label>
                        <input type="text" name="Contact" class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Contact">
                    </div>
                    <div>
                        <label class="block mb-1">Role</label>
                        <select name="RoleID" class="border-gray-300 rounded-md w-full py-2 px-3">
                            <option value="1">User</option>
                            <option value="2">Leaser</option>
                            <option value="3">Admin</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Add User</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->




        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../js/scripts.js"></script>
        @endsection
