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
                <li><a href="{{ route('leaser.reviews') }}" class="block py-2 px-4 hover:bg-purple-600">Manage reviews</a>
                </li>
            </ul>
        </div>
        <!-- // Left Sidebar -->

        <!-- Admin Content -->
        <div class="flex-1 p-10">
            {{-- <div class="flex justify-between mb-6">
                <a href="{{ route('house.create') }}" class="btn btn-blue">Add house</a>
                <a href="{{ route('house.index') }}" class="btn btn-blue">Manage house</a>
            </div> --}}

            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-2xl font-bold mb-6">Manage booking</h2>

                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 bg-gray-200">#</th>
                                <th class="py-2 px-4 bg-gray-200">HouseID</th>
                                <th class="py-2 px-4 bg-gray-200">Address</th>
                                <th class="py-2 px-4 bg-gray-200">BookingStatus</th>
                                <th class="py-2 px-4 bg-gray-200">ArravingTime</th>
                                <th class="py-2 px-4 bg-gray-200">LeavingTime</th>
                                <th class="py-2 px-4 bg-gray-200">RenterID</th>
                                <th class="py-2 px-4 bg-gray-200" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($bookings as $booking)
                                <tr class="{{ $loop->even ? 'bg-gray-100' : '' }}">
                                    <td class="py-2 px-4">{{ $loop->iteration }}</td>
                                    <td class="py-2 px-4">{{ $booking->HouseID }}</td>
                                    <td class="py-2 px-4">{{ $booking->Address }}</td>
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
                                    <td class="py-2 px-4">{{ $booking->RenterID }}</td>
                                    <td class="py-2 px-4">
                                        <a href="{{ route('leaserbooking.edit', $booking->BookingID) }}"
                                            class="text-blue-600"><i class="fas fa-pen"></i></a>
                                    </td>
                                    <td class="py-2 px-4">
                                        <!-- Form for delete action -->
                                        <form method="POST"
                                            action="{{ route('leaserbooking.destroy', $booking->BookingID) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="py-2 px-4 text-center">No bookings found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $bookings->links() }}
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
