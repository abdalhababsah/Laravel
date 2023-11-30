<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User - Tailwind CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">


    <div class="flex">
        <!-- Left Sidebar -->
        <!-- Left sidebar content remains the same -->

        <!-- Admin Content -->
        <div class="w-full p-8">
            <div class="flex justify-between mb-8">
                <a href="{{ route('adminhouse.create') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md mr-4">Add house</a>
                <a href="{{ route('adminhouse.index') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Manage house</a>
            </div>

            <div class="bg-white rounded-md shadow-md p-8">
                <h2 class="text-2xl font-bold mb-4">Add house</h2>

                <form action="{{ route('adminhouse.store') }}" method="post" class="space-y-4">
                    @csrf
                    @method('post')
                    <div>
                        <label class="block mb-1">Address</label>
                        <input type="text" name="Address" class="border-gray-300 rounded-md w-full py-2 px-3"
                            placeholder="Address">
                    </div>
                    <div>
                        <label class="block mb-1">Type</label>
                        <input type="text" name="Type" class="border-gray-300 rounded-md w-full py-2 px-3"
                            placeholder="Type">
                    </div>
                    <div>
                        <label class="block mb-1">NumberOfRoom</label>
                        <input type="text" name="NumberOfRoom" class="border-gray-300 rounded-md w-full py-2 px-3"
                            placeholder="NumberOfRoom">
                    </div>
                    <div>
                        <label class="block mb-1">NumberOfToilet</label>
                        <input type="text" name="NumberOfToilet" class="border-gray-300 rounded-md w-full py-2 px-3"
                            placeholder="NumberOfToilet">
                    </div>
                    <div>
                        <label class="block mb-1">NumberOfBelcony</label>
                        <input type="text" name="NumberOfBelcony" class="border-gray-300 rounded-md w-full py-2 px-3"
                            placeholder="NumberOfBelcony">
                    </div>
                    <div>
                        <label class="block mb-1">Rent</label>
                        <input type="text" name="Rent" class="border-gray-300 rounded-md w-full py-2 px-3"
                            placeholder="Rent">
                    </div>
                    <div>
                        <label class="block mb-1">Image</label>
                        <input type="file" name="Image" class="border-gray-300 rounded-md w-full py-2 px-3"
                            placeholder="Image">
                    </div>
                    <div>
                        <label class="block mb-1">Status</label>
                        <select name="Status" class="border-gray-300 rounded-md w-full py-2 px-3">
                            <option value="available">available</option>
                            <option value="booked">booked</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-1">Location</label>
                        <input type="text" name="Location" class="border-gray-300 rounded-md w-full py-2 px-3"
                            placeholder="Location">
                    </div>
                    <div>
                        <label class="block mb-1">UserID</label>
                        <input type="text" name="UserID" class="border-gray-300 rounded-md w-full py-2 px-3"
                            placeholder="UserID">
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Add
                            house</button>
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
