@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Step 1: Data Pribadi</h2>
    <form action="{{ route('pelanggan.step2') }}" method="POST">
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
                <option value="jabodetabek">Jabodetabek</option>
                <option value="luar">Luar Jabodetabek</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
</div>
@endsection
