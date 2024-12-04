@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Step 2: Pilih Material dan Frame</h2>
    <form action="{{ route('pelanggan.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="material">Material</label>
            <select name="material" id="material" class="form-control" required>
                @foreach ($materials as $material)
                    <option value="{{ $material->id_material }}">{{ $material->nama_material }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="frame">Frame</label>
            <select name="frame" id="frame" class="form-control" required>
                @foreach ($frames as $frame)
                    <option value="{{ $frame->id_material }}">{{ $frame->nama_material }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="dimensi">Dimensi Box</label>
            <input type="text" name="dimensi" id="dimensi" class="form-control" placeholder="Panjang x Lebar x Tinggi" required>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
