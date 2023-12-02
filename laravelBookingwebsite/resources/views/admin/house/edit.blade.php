<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User - Tailwind CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header>
        <!-- Header content remains the same -->
    </header>

    <div class="flex">

        <div class="w-full p-8">
            <div class="flex justify-between mb-8">
                <a href="{{ route('adminhouse.create') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md mr-4">Add house</a>
                <a href="{{ route('adminhouse.index') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Manage house</a>
            </div>

            <div class="bg-white rounded-md shadow-md p-8">
                <h2 class="text-2xl font-bold mb-4">Edit house</h2>

                <form action="{{ route('adminhouse.update', $house->HouseID) }}" method="post" class="space-y-4" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div>
                        <label class="block mb-1">Address</label>
                        <input type="text" name="Address" value="{{ old('Address', $house->Address) }}" class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Address">
                    </div>

                    <div>
                        <label class="block mb-1">Type</label>
                        <input type="text" name="Type" value="{{ old('Type', $house->Type) }}" class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Type">
                    </div>

                    <div>
                        <label class="block mb-1">Number of Rooms</label>
                        <input type="number" name="NumberOfRoom" value="{{ old('NumberOfRoom', $house->NumberOfRoom) }}" class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Number of Rooms">
                    </div>

                    <div>
                        <label class="block mb-1">Number of Toilets</label>
                        <input type="number" name="NumberOfToilet" value="{{ old('NumberOfToilet', $house->NumberOfToilet) }}" class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Number of Toilets">
                    </div>

                    <div>
                        <label class="block mb-1">Number of Balconies</label>
                        <input type="number" name="NumberOfBelcony" value="{{ old('NumberOfBelcony', $house->NumberOfBelcony) }}" class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Number of Balconies">
                    </div>

                    <div>
                        <label class="block mb-1">Rent</label>
                        <input type="number" name="Rent" value="{{ old('Rent', $house->Rent) }}" class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Rent">
                    </div>

                    < <div>
                        <label class="block mb-1">Image</label>
                        <input type="file" name="Image" class="border-gray-300 rounded-md w-full py-2 px-3" accept="image/*">
                    </div>

                    <div>
                        <label class="block mb-1">Status</label>
                        <select name="Status" class="border-gray-300 rounded-md w-full py-2 px-3">
                            <option value="available" {{ old('Status', $house->Status) === 'available' ? 'selected' : '' }}>Available</option>
                            <option value="booked" {{ old('Status', $house->Status) === 'booked' ? 'selected' : '' }}>Booked</option>
                        </select>
                    </div>

                    <div>
                        <label class="block mb-1">Location</label>
                        <input type="text" name="Location" value="{{ old('Location', $house->Location) }}" class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="Location">
                    </div>

                    <div>
                        <label class="block mb-1">UserID</label>
                        <input type="number" name="UserID" value="{{ old('UserID', $house->UserID) }}" class="border-gray-300 rounded-md w-full py-2 px-3" placeholder="UserID">
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Edit House</button>
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
</body>

</html>
