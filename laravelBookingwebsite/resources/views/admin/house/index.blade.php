@extends('layout.master')
@section('content')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../css/admin.css">

    <title>Admin Section - Manage Users</title>
    <!-- ... (head content remains the same) ... -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">






    <div class="flex h-screen bg-gray-100">
        <!-- Left Sidebar -->
        <div class="w-1/4 bg-purple-700 py-8 px-4">
            <ul class="text-white">

                <li><a href="{{ route('users.index') }}" class="block py-2 px-4 hover:bg-purple-600">Manage Users</a></li>
                <li><a href="{{ route('adminhouse.index') }}" class="block py-2 px-4 hover:bg-purple-600">Manage Houses</a></li>
                <li><a href="{{ route('admin.bookings.index') }}" class="block py-2 px-4 hover:bg-purple-600">Manage Bookings</a></li>
                <li><a href="{{ route('admin.reviews.index') }}" class="block py-2 px-4 hover:bg-purple-600">Manage Reviews</a></li>
            </ul>
        </div>
        <!-- // Left Sidebar -->

        <!-- // Left Sidebar -->
        <!-- Admin Content -->
        <div class="flex-1 p-10">
            <div class="flex justify-between mb-6">
                <a href="{{ route('adminhouse.create') }}" class="btn btn-blue">Add house</a>
                <a href="{{ route('adminhouse.index') }}" class="btn btn-blue">Manage house</a>
            </div>

            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-2xl font-bold mb-6">Manage house</h2>

                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-gray-200">#</th>
                            <th class="py-2 px-4 bg-gray-200">Address</th>
                            <th class="py-2 px-4 bg-gray-200">Type</th>
                            <th class="py-2 px-4 bg-gray-200">NumberOfRoom</th>
                            <th class="py-2 px-4 bg-gray-200">NumberOfToilet</th>
                            <th class="py-2 px-4 bg-gray-200">NumberOfBelcony</th>
                            <th class="py-2 px-4 bg-gray-200">Rent</th>
                            <th class="py-2 px-4 bg-gray-200">Image</th>
                            <th class="py-2 px-4 bg-gray-200">Status</th>
                            <th class="py-2 px-4 bg-gray-200">Location</th>
                            <th class="py-2 px-4 bg-gray-200">UserID</th>
                            <th class="py-2 px-4 bg-gray-200" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($houses as $house)
                            <tr class="{{ $loop->even ? 'bg-gray-100' : '' }}">
                                <td class="py-2 px-4">{{ $loop->iteration }}</td>
                                <td class="py-2 px-4">{{ $house->Address }}</td>
                                <td class="py-2 px-4">{{ $house->Type }}</td>
                                <td class="py-2 px-4">{{ $house->NumberOfRoom }}</td>
                                <td class="py-2 px-4">{{ $house->NumberOfToilet }}</td>
                                <td class="py-2 px-4">{{ $house->NumberOfBelcony }}</td>
                                <td class="py-2 px-4">{{ $house->Rent }}</td>
                                <td class="py-2 px-4"><img src="{{ asset( $house->Image) }}"
                                        width="80px" height="80px" alt="house Image"></td>
                                <td class="py-2 px-4">{{ $house->Status }}</td>
                                <td class="py-2 px-4">{{ $house->Location }}</td>
                                <td class="py-2 px-4">{{ optional($house->user)->Name }}</td>
                                <td class="py-2 px-4">

                                    <a href="{{ route('adminhouse.edit', $house->HouseID) }}" class="text-blue-600"><i
                                            class="fas fa-pen"></i></a>
                                </td>
                                <td class="py-2 px-4">
                                    <!-- Form for delete action -->
                                    <form method="POST" action="{{ route('adminhouse.destroy', $house->HouseID) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $houses->links() }}
                </div>
            </div>
        </div>
        <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Custom Script -->
    <script src="../../js/scripts.js"></script>
@endsection
