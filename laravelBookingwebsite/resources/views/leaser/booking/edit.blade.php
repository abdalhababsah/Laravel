@extends('layout.master')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <body class="bg-gray-100">
        <div class="flex">
            <!-- Admin Content -->
            <div class="w-full p-8">
                <div class="bg-white rounded-md shadow-md p-8">
                    <h2 class="text-2xl font-bold mb-4">Edit Booking</h2>
                    <div class="w-1/4 bg-purple-700 py-8 px-4">
                        <ul class="text-white">
                            <li><a href="{{ route('leaserbooking.index') }}"
                                    class="block py-2 px-4 hover:bg-purple-600">Manage
                                    booking</a></li>
                        </ul>
                    </div>

                    <form action="{{ route('leaserbooking.update', $booking->BookingID) }}" method="post" class="space-y-4"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div>
                            <label class="block mb-1">Booking Status</label>
                            <select name="BookingStatus" class="border-gray-300 rounded-md w-full py-2 px-3">
                                <option value="1"
                                    {{ old('BookingStatus', $booking->BookingStatus) == 1 ? 'selected' : '' }}>
                                    Booked
                                </option>
                                <option value="2"
                                    {{ old('BookingStatus', $booking->BookingStatus) == 2 ? 'selected' : '' }}>
                                    Pending
                                </option>
                            </select>
                        </div>

                        <div>
                            <label class="block mb-1">Arriving Time</label>
                            <input type="text" name="ArravingTime"
                                value="{{ old('ArravingTime', $booking->ArravingTime) }}"
                                class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Arriving Time">
                        </div>

                        <div>
                            <label class="block mb-1">Leaving Time</label>
                            <input type="text" name="LeavingTime" value="{{ old('LeavingTime', $booking->LeavingTime) }}"
                                class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Leaving Time">
                        </div>

                        <div>
                            <label class="block mb-1">Renter ID</label>
                            <input type="text" name="RenterID" value="{{ old('RenterID', $booking->RenterID) }}"
                                class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Renter ID">
                        </div>

                        <div>
                            {{-- <label class="block mb-1">House ID</label> --}}
                            <input type="hidden" name="HouseID" value="{{ old('HouseID', $booking->HouseID) }}"
                                class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="House ID">
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
        <!-- Custom Script -->
        <script src="../../js/scripts.js"></script>
    @endsection
