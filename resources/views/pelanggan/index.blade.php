<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
</head>
<body>
    <h1>Daftar Pelanggan</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th>Lokasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggan as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->no_telepon }}</td>
                    <td>{{ $p->lokasi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
