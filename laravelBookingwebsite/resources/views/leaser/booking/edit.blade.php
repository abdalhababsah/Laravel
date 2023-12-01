@extends('layout.master')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


    <body class="bg-gray-100">


        <div class="flex">
            <!-- Left Sidebar -->
            <!-- Left sidebar content remains the same -->

            <!-- Admin Content -->
            <div class="w-full p-8">
                <div class="flex justify-between mb-8">
                    {{-- <a href="{{ route('house.create') }}"
                        class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md mr-4">Add house</a> --}}
                    <a href="{{ route('leaserbooking.index') }}"
                        class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Manage booking</a>
                </div>

                <div class="bg-white rounded-md shadow-md p-8">
                    <h2 class="text-2xl font-bold mb-4">Add house</h2>

                    <form action="{{ route('leaserbooking.update', $booking->BookingID) }}" method="post" class="space-y-4"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div>
                            <label class="block mb-1">Booking Status</label>
                            <input type="text" name="booking_status"
                                value="{{ old('booking_status', $booking->BookingStatus) }}"
                                class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Booking Status">
                        </div>

                        <div>
                            <label class="block mb-1">Arriving Time</label>
                            <input type="text" name="arriving_time"
                                value="{{ old('arriving_time', $booking->ArravingTime) }}"
                                class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Arriving Time">
                        </div>

                        <div>
                            <label class="block mb-1">Leaving Time</label>
                            <input type="text" name="leaving_time"
                                value="{{ old('leaving_time', $booking->LeavingTime) }}"
                                class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Leaving Time">
                        </div>

                        <div>
                            <label class="block mb-1">Renter ID</label>
                            <input type="text" name="renter_id" value="{{ old('renter_id', $booking->RenterID) }}"
                                class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Renter ID">
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">
                                Edit Booking
                            </button>
                        </div>
                    </form>

                </div>
            </div>
            <!-- // Admin Content -->
        </div>
        <!-- // Page Wrapper -->

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../js/scripts.js"></script>
    @endsection
