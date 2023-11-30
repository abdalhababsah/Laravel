<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>

<body>
    <h1>create</h1>
    <form action="{{ route('house.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div>
            <label for="">Address</label>
            <input type="text" name="Address" placeholder="Address" required>
        </div>
        <div>
            <label for="">Type</label>
            <input type="text" name="Type" placeholder="Type" required>
        </div>
        <div>
            <label for="">NumberOfRoom</label>
            <input type="text" name="NumberOfRoom" placeholder="NumberOfRoom" required>
        </div>
        <div>
            <label for="">NumberOfToilet</label>
            <input type="text" name="NumberOfToilet" placeholder="NumberOfToilet" required>
        </div>
        <div>
            <label for="">NumberOfBelcony</label>
            <input type="text" name="NumberOfBelcony" placeholder="NumberOfBelcony" required>
        </div>
        <div>
            <label for="">Rent</label>
            <input type="text" name="Rent" placeholder="Rent" required>
        </div>
        <div>
            <label for="">Image</label>
            <input type="file" name="Image" placeholder="Image" required>
        </div>
        <div>
            <label for="">Status</label>
            <select name="Status" id="Status">
                <option value="available">available</option>
                <option value="booked">booked</option>
            </select>
        </div>
        <div>
            <label for="">Location</label>
            <input type="text" name="Location" placeholder="Location" required>
        </div>
        <div>
            <label for="">BookingID</label>
            <input type="text" name="BookingID" placeholder="BookingID" required>
        </div>
        <div>
            <label for="">UserID</label>
            <input type="text" name="UserID" placeholder="UserID" required>
        </div>

        <div>
            <input type="submit" value="Save a New house">
        </div>
    </form>

</body>

</html>
