<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>houes</h1>
    <div>
        <div>
            <a href="{{ route('house.create') }}"> create a house</a>
        </div>
        <table border="1">
            <tr>
                <th style="margin: 10px">ID</th>
                <th>Address</th>
                <th>Type</th>
                <th>NumberOfRoom</th>
                <th>NumberOfToilet</th>
                <th>NumberOfBelcony</th>
                <th>Rent</th>
                <th>Image</th>
                <th>Status</th>
                <th>Location</th>
                <th>BookingID</th>
                <th>UserID</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($houses as $house)
                <tr>
                    <td>{{ $house->HouseID }}</td>
                    <td>{{ $house->Address }}</td>
                    <td>{{ $house->Type }}</td>
                    <td>{{ $house->NumberOfRoom }}</td>
                    <td>{{ $house->NumberOfToilet }}</td>
                    <td>{{ $house->NumberOfBelcony }}</td>
                    <td>{{ $house->Rent }}</td>
                    <td><img src="{{ asset('storage/images/' . $house->Image) }}" width="80px" height="80px"
                            alt="house Image"></td>
                    <td>{{ $house->Status }}</td>
                    <td>{{ $house->Location }}</td>
                    <td>{{ $house->BookingID }}</td>
                    <td>{{ $house->UserID }}</td>
                    <td>
                        <a href="{{ route('house.edit', ['house' => $house]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('house.destroy', ['house' => $house]) }}">
                            @method('delete')
                            @csrf

                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

</body>

</html>
