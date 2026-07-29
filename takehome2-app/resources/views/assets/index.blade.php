<!DOCTYPE html>
<html>
<head>
    <title>Assets</title>
</head>
<body>
    <h1>Asset List</h1>

    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Department</th>
            <th>Category</th>
            <th>Status</th>
            <th>Created</th>
        </tr>
        @foreach ($assets as $asset)
            <tr>
                <td>{{ $asset->name }}</td>
                <td>{{ $asset->department }}</td>
                <td>{{ $asset->category }}</td>
                <td>{{ $asset->status }}</td>
                <td>{{ $asset->created_at }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
