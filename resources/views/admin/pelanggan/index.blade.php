@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Daftar Pelanggan</h1>
    <a href="{{ route('dashboard.pelanggan.create') }}" class="btn btn-primary">Tambah Pelanggan</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggans as $pelanggan)
                <tr>
                    <td>{{ $pelanggan->id }}</td>
                    <td>{{ $pelanggan->nama }}</td>
                    <td>{{ $pelanggan->email }}</td>
                    <td>{{ $pelanggan->no_telepon }}</td>
                    <td>{{ $pelanggan->lokasi }}</td>
                    <td>
                        <a href="{{ route('dashboard.pelanggan.edit', $pelanggan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('dashboard.pelanggan.destroy', $pelanggan->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus pelanggan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
