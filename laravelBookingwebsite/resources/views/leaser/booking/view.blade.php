@extends('layout.master')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <div class="flex h-screen bg-gray-100">
        <!-- Left Sidebar - Add your sidebar content here -->

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
                                    <td class="py-2 px-4">{{ $review->Rate }}</td>
                                    <td class="py-2 px-4">{{ $review->HouseAddress }}</td>
                                    <td class="py-2 px-4">{{ $review->HouseType }}</td>
                                    <td class="py-2 px-4">{{ $review->UserName }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="py-2 px-4 text-center">No reviews found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->
@endsection
