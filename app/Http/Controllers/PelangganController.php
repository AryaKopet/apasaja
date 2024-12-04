<?php
namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // Menampilkan daftar pelanggan di dashboard admin
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('admin.pelanggan.index', compact('pelanggans'));
    }

    // Form untuk menambah pelanggan
    public function create()
    {
        return view('admin.pelanggan.create');
    }

    // Menyimpan data pelanggan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pelanggan,email',
            'no_telepon' => 'required|string|max:15',
            'lokasi' => 'required|in:Jabodetabek,Luar',
        ]);

        Pelanggan::create($request->all());

        return redirect()->route('dashboard.pelanggan')->with('success', 'Pelanggan berhasil ditambahkan!');
    }

    // Form untuk mengedit pelanggan
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('admin.pelanggan.edit', compact('pelanggan'));
    }

    // Mengupdate data pelanggan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pelanggan,email,' . $id,
            'no_telepon' => 'required|string|max:15',
            'lokasi' => 'required|in:Jabodetabek,Luar',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($request->all());

        return redirect()->route('dashboard.pelanggan')->with('success', 'Pelanggan berhasil diperbarui!');
    }

    // Menghapus pelanggan
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('dashboard.pelanggan')->with('success', 'Pelanggan berhasil dihapus!');
    }
}
