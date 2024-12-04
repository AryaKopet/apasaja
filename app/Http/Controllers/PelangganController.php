<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{   
    public function index()
    {
        try {
            $pelanggan = Pelanggan::all();
            return view('pelanggan.index', compact('pelanggan'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function step1()
    {
        return view('pelanggan.form-step1');
    }

    public function step2(Request $request)
    {
        // Simpan data sementara di session
        $request->session()->put('pelanggan', $request->only('nama', 'email', 'no_telepon', 'lokasi'));

        // Ambil data material dan frame berdasarkan kategori
        $materials = Material::where('kategori', 'material')->get();
        $frames = Material::where('kategori', 'frame')->get();

        return view('pelanggan.form-step2', compact('materials', 'frames'));
    }

    public function submit(Request $request)
    {
        $pelangganData = $request->session()->get('pelanggan');
        // Simpan data pelanggan dan pilihan material/frame
        // (Implementasikan penyimpanan sesuai kebutuhan)
        
        return redirect()->route('pelanggan.thankyou');
    }

    public function thankyou()
    {
        return view('pelanggan.thankyou');
    }
}
