@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Edit Pelanggan</h1>
    <form action="{{ route('dashboard.pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $pelanggan->nama }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $pelanggan->email }}" required>
        </div>
        <div class="form-group">
            <label for="no_telepon">No. Telepon</label>
            <input type="text" name="no_telepon" id="no_telepon" class="form-control" value="{{ $pelanggan->no_telepon }}" required>
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <select name="lokasi" id="lokasi" class="form-control" required>
                <option value="Jabodetabek" {{ $pelanggan->lokasi == 'Jabodetabek' ? 'selected' : '' }}>Jabodetabek</option>
                <option value="Luar" {{ $pelanggan->lokasi == 'Luar' ? 'selected' : '' }}>Luar</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
