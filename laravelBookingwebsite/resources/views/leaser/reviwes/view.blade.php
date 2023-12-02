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

    <title>Admin Section - Manage booking</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <div class="flex h-screen bg-gray-100">
        <!-- Left Sidebar -->
        <div class="w-1/4 bg-purple-700 py-8 px-4">
            <ul class="text-white">
                <li><a href="{{ route('house.index') }}" class="block py-2 px-4 hover:bg-purple-600">Manage huose</a></li>
                <li><a href="{{ route('leaserbooking.index') }}" class="block py-2 px-4 hover:bg-purple-600">Manage
                        booking</a></li>
            </ul>
        </div>
        <!-- // Left Sidebar -->

        <!-- Admin Content -->
        <div class="flex-1 p-10">


            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-2xl font-bold mb-6">Manage Reviews</h2>

                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 bg-gray-200">#</th>
                                <th class="py-2 px-4 bg-gray-200">Opinion</th>
                                <th class="py-2 px-4 bg-gray-200">Rate</th>
                                <th class="py-2 px-4 bg-gray-200">House Address</th>
                                <th class="py-2 px-4 bg-gray-200">House Type</th>
                                <th class="py-2 px-4 bg-gray-200">User Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($reviews as $review)
                                <tr class="{{ $loop->even ? 'bg-gray-100' : '' }}">
                                    <td class="py-2 px-4">{{ $loop->iteration }}</td>
                                    <td class="py-2 px-4">{{ $review->Opinion }}</td>
                                    <td class="py-2 px-4">
                                        @for ($i = 0; $i < $review->Rate; $i++)
                                            <i class="bi bi-star-fill text-warning"></i>
                                        @endfor
                                    </td>
                                    <td class="py-2 px-4">{{ $review->HouseAddress }}</td>
                                    <td class="py-2 px-4">{{ $review->HouseType }}</td>
                                    <td class="py-2 px-4">{{ $review->UserName }}</td>
                                @empty
                                <tr>
                                    <td colspan="6" class="py-2 px-4 text-center">No reviews found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $reviews->links() }}
                    </div>
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
