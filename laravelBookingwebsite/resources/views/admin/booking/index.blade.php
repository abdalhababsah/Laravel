@extends('layout.master')

@section('content')
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../css/admin.css">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional styles or overrides can be added here */
    </style>

    <form action="{{ route('admin.booking.search') }}" method="POST" class="text-center mb-4">
        @csrf
        @method('GET')
        <input class="w-full h-12 rounded-lg focus-within:shadow-lg bg-white border-gray-300 px-4" type="text"
            name="search" id="search" placeholder="Search by Renter Name..." />
        <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded-lg ml-2">Search</button>
    </form>

    <div class="flex  lg:flex-row h-screen bg-gray-100">
        <!-- Left Sidebar -->
        <div class="w-1/4 bg-purple-700 py-8 px-4">
            <ul class="text-white">

                <li><a href="{{ route('users.index') }}" class="block py-2 px-4 hover:bg-purple-600">Manage Users</a></li>
                <li><a href="{{ route('adminhouse.index') }}" class="block py-2 px-4 hover:bg-purple-600">Manage Houses</a></li>
                <li><a href="{{ route('admin.bookings.index') }}" class="block py-2 px-4 hover:bg-purple-600">Manage Bookings</a></li>
                <li><a href="{{ route('admin.reviews.index') }}" class="block py-2 px-4 hover:bg-purple-600">Manage Reviews</a></li>
            </ul>
        </div>
        <!-- ... (sidebar code remains the same) ... -->

        <!-- Admin Content -->
        <div class="w-full lg:w-3/4 p-4 lg:p-10">
            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-2xl font-bold mb-6">Manage Bookings</h2>

                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-gray-200">#</th>
                            <th class="py-2 px-4 bg-gray-200">Renter Name</th>
                            <th class="py-2 px-4 bg-gray-200">Renter ID</th>
                            <th class="py-2 px-4 bg-gray-200">Booking Status</th>
                            <th class="py-2 px-4 bg-gray-200">Arriving Time</th>
                            <th class="py-2 px-4 bg-gray-200">Leaving Time</th>
                            <!-- Add more table headers for booking details -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr class="{{ $loop->even ? 'bg-gray-100' : '' }}">
                                <td class="py-2 px-4">{{ $loop->iteration }}</td>
                                <td class="py-2 px-4">{{ $booking->renter->Name }}</td>
                                <td class="py-2 px-4">{{ $booking->BookingID }}</td>
                                <td class="py-2 px-4">
                                    @if ($booking->BookingStatus === 1)
                                        Booked
                                    @elseif ($booking->BookingStatus === 2)
                                        Pending
                                    @else
                                        <!-- Handle other cases -->
                                    @endif
                                </td>
                                <td class="py-2 px-4">{{ $booking->ArravingTime }}</td>
                                <td class="py-2 px-4">{{ $booking->LeavingTime }}</td>
                                <!-- Add more table columns for booking details -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Pagination Links -->
                <div class="mt-4">
                    {{ $bookings->links() }}
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
