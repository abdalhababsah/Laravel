@extends('layout.master')

@section('content')


    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Your other styles and scripts -->




<body class="bg-gray-100">

    <header class="bg-white py-4 px-6 flex justify-between items-center">
        <div class="logo">
            <h1 class="logo-text text-2xl font-bold text-purple-700">Velvet Strides</h1>
        </div>
        <!-- ... (menu-toggle remains the same) ... -->
        <ul class="nav flex items-center">
            <!-- ... (user dropdown remains the same) ... -->
        </ul>
    </header>

    <div class="flex h-screen bg-gray-100">
        <!-- Left Sidebar (remains the same) -->
        <div class="w-1/4 bg-purple-700 py-8 px-4">
            <ul class="text-white">

                <li><a href="{{ route('users.index') }}" class="block py-2 px-4 hover:bg-purple-600">Manage Users</a></li>
                <li><a href="{{ route('adminhouse.index') }}" class="block py-2 px-4 hover:bg-purple-600">Manage Houses</a></li>
                <li><a href="{{ route('admin.bookings.index') }}" class="block py-2 px-4 hover:bg-purple-600">Manage Bookings</a></li>
                <li><a href="{{ route('admin.reviews.index') }}" class="block py-2 px-4 hover:bg-purple-600">Manage Reviews</a></li>
            </ul>
        </div>

        <!-- Admin Content -->
        <div class="flex-1 p-10">
            <div class="flex justify-between mb-6">
                <a href="{{ route('users.create') }}" class="btn btn-blue">Add User</a>
                <a href="{{ route('users.index') }}" class="btn btn-blue">Manage Users</a>
            </div>

            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-2xl font-bold mb-6">Edit User</h2>

                <form action="{{ route('users.update', ['user' => $User->id]) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                        <input type="text" name="name" class="text-input" value="{{ $User->Name }}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" name="email" class="text-input" value="{{ $User->Email }}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" name="password" class="text-input">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Password Confirmation</label>
                        <input type="password" name="password_confirmation" class="text-input">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Role</label>
                        <select name="RoleID" class="text-input">
                            <option value="1" {{ $User->RoleID === 1 ? 'selected' : '' }}>User</option>
                            <option value="2" {{ $User->RoleID === 2 ? 'selected' : '' }}>Leaser</option>
                            <option value="3" {{ $User->RoleID === 3 ? 'selected' : '' }}>Admin</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-blue">Update User</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->

    <!-- Your scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../../js/scripts.js"></script>
    @endsection

