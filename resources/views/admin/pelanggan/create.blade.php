@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Tambah Pelanggan</h1>
    <form action="{{ route('dashboard.pelanggan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="no_telepon">No. Telepon</label>
            <input type="text" name="no_telepon" id="no_telepon" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <select name="lokasi" id="lokasi" class="form-control" required>
                <option value="Jabodetabek">Jabodetabek</option>
                <option value="Luar">Luar</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
