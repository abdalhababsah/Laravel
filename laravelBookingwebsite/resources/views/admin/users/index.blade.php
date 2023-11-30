




</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">

        <!-- Custom Styling -->
        <link rel="stylesheet" href="../../css/style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../../css/admin.css">

        <title>Admin Section - Manage Users</title>
    <!-- ... (head content remains the same) ... -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional styles or overrides can be added here */
    </style>
</head>
<body class="bg-gray-100">

    <header class="bg-white py-4 px-6 flex justify-between items-center">
        <div class="logo">
            <h1 class="logo-text text-2xl font-bold text-purple-700">Velvet Strides</h1>
        </div>
        <i class="fa fa-bars menu-toggle text-2xl"></i>
        <ul class="nav flex items-center">
            <li class="relative">
                <a href="#" class="flex items-center">
                    <i class="fa fa-user text-purple-700"></i>
                    <span class="ml-2">Awa Melvine</span>
                    <i class="fa fa-chevron-down ml-1 text-xs text-gray-600"></i>
                </a>
                <ul class="absolute top-full left-0 bg-white border border-gray-200 mt-1 hidden">
                    <li><a href="#" class="block py-2 px-4 text-sm hover:bg-gray-100">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <div class="flex h-screen bg-gray-100">
        <!-- Left Sidebar -->
        <div class="w-1/4 bg-purple-700 py-8 px-4">
            <ul class="text-white">
                <li><a href="../product/index.html" class="block py-2 px-4 hover:bg-purple-600">Manage Product</a></li>
                <li><a href="../users/index.html" class="block py-2 px-4 hover:bg-purple-600">Manage Users</a></li>
                <li><a href="../categorey/index.html" class="block py-2 px-4 hover:bg-purple-600">Manage Category</a></li>
                <li><a href="../Salls/index.html" class="block py-2 px-4 hover:bg-purple-600">Manage Salls</a></li>
            </ul>
        </div>
        <!-- // Left Sidebar -->

            <!-- // Left Sidebar -->
        <!-- Admin Content -->
        <div class="flex-1 p-10">
            <div class="flex justify-between mb-6">
                <a href="{{ route('users.create') }}" class="btn btn-blue">Add User</a>
                <a href="{{ route('users.index') }}" class="btn btn-blue">Manage Users</a>
            </div>

            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-2xl font-bold mb-6">Manage Users</h2>

                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-gray-200">#</th>
                            <th class="py-2 px-4 bg-gray-200">Username</th>
                            <th class="py-2 px-4 bg-gray-200">Contact</th>
                            <th class="py-2 px-4 bg-gray-200">Email</th>
                            <th class="py-2 px-4 bg-gray-200">Role</th>
                            <th class="py-2 px-4 bg-gray-200" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="{{ $loop->even ? 'bg-gray-100' : '' }}">
                            <td class="py-2 px-4">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4">{{ $user->Name }}</td>
                            <td class="py-2 px-4">{{ $user->Contact }}</td>
                            <td class="py-2 px-4">{{ $user->Email }}</td>
                            <td class="py-2 px-4">{{ $user->RoleID }}</td>
                            <td class="py-2 px-4">
                                <a href="{{ route('users.edit', $user->id) }}" class="text-blue-600"><i class="fas fa-pen"></i></a>
                            </td>
                            <td class="py-2 px-4">
                                <!-- Form for delete action -->
                                <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Custom Script -->
    <script src="../../js/scripts.js"></script>

</body>
</html>
